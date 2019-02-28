<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Orders;
use App\Models\GuestUsers;
use App\Models\Pricings;
use App\Models\Services;
use App\Models\guestBehalfBookings;

use App\Http\Helpers\ServiceFeeHelper;
use App\Http\Helpers\Curl;

class orderHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function createOrder( $orderData )
    {   
        $returnArr = [];

        if( ! self::checkAvailability( $orderData['linkable_id'], $orderData['linkable_type'], $orderData['booking_from_date'], $orderData['booking_to_date'] ) )
        {

            $returnArr['success'] = false;
            $returnArr['message'] = 'sold out on selected dates';
            $returnArr['data']    = [];

            return $returnArr ; 
        }

        try
        {   
            switch ($orderData['linkable_type']) 
            {
                case 'vennues':
                    self::createOrderVennue($orderData);
                    break;
                case 'events':
                    self::createOrderEvents($orderData);
                    break;
                case 'packages':
                    self::createOrderPackages($orderData);
                    break;
            }

            return [];
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Reviews ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Reviews", 1);

        }
       
    }

    /**
     * @param integer $linkableId
     * @param string $linkableType
     * @param date $bookingFromDate
     * @param date $bookingToDate
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function createOrderVennue($orderData )
    {   

        $serviceIdArr = Services::select('id')
                                ->where('linkable_id', $orderData['linkable_id'])
                                ->where('linkable_type', $orderData['linkable_type'])
                                ->where('status', 1)
                                ->get()
                                ->toArray();
        
        $linkableIdArr[]  = $orderData['linkable_id'];

        
        $noOfDays = self::getNoOfDays($orderData['booking_from_date'], $orderData['booking_to_date']);

        if(!empty($serviceIdArr))
        {
            array_push($linkableIdArr, array_column($serviceIdArr, 'id'));
        }

        $pricingArr = Pricings::select('pricing_type.name', 'pricings.actual_price')
                        ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                        ->whereIn('linkable_type', ['vennues', 'services'])
                        ->whereIn('linkable_id', $linkableIdArr)
                        ->get()
                        ->toArray();

        

        if(empty($pricingArr)) 
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." No pricing Data Found For".print_r($linkableIdArr, true) );

            $returnArr['success'] = false;
            
            $returnArr['message'] = 'No pricing Data Found';
            
            $returnArr['data']    = [];
                
            return $returnArr;
            
        }

        try
        {   
            $amount = 0.00;

            foreach ($pricingArr as $key => $value) 
            {   
                
                if($value['name'] == 'per person')
                {
                    $amount = $amount + ($value['actual_price'] * $orderData['no_of_guests']);
                }
                else if($value['name'] == 'per day')
                {
                    $amount = $amount + ($value['actual_price'] * $noOfDays);
                }
            }

            if(empty($amount))
            {   
                \Log::info(__CLASS__." ".__FUNCTION__." Total Amount to Pay cannot be zero" );

                $returnArr['success'] = false;
               
                $returnArr['message'] = 'Total Amount to Pay cannot be zero';
               
                $returnArr['data']    = [];
                
                return $returnArr;
                
            }

            $serviceCharges = ServiceFeeHelper::getServiceCharges();

            $serviceTax             = $serviceCharges['service_tax'];

            $customerCommissionFee  = $serviceCharges['customer_commisssion'];

            $taxAmount              = self::calculateFeeAmount ( $amount,$serviceTax );

            $commisionAmount        = self::calculateFeeAmount ( $amount, $customerCommissionFee);

            $totalAmount            = $amount + $taxAmount + $commisionAmount;

            if($orderData['is_partial_payment'])
            {   
                $partialPaymentPercent  = self::getPartialPaymentPercent($orderData['linkable_id'], $orderData['linkable_type']);

                if(empty($partialPaymentArr))
                {   
                    \Log::info(__CLASS__." ".__FUNCTION__." partial Amount is zero, so cannot opt for cash payment" );

                    $returnArr['success'] = false;
            
                    $returnArr['message'] = 'partial Amount is zero, so cannot opt for cash payment';
            
                    $returnArr['data']    = [];
                
                    return $returnArr;
                }

                $partialAmount    = self::calculateFeeAmount ( $totalAmount, $partialPaymentPercent);
            }

            try
            {
                \DB::beginTransaction();


                $orderData['total_amount']                  = $amount;

                $orderData['discounted_amount']             = 0;

                $orderData['net_total']                     = $totalAmount;

                $orderData['tax_amount']                    = $taxAmount;

                $orderData['tax_percent']                   = $serviceTax;

                $orderData['service_fee']                   = $customerCommissionFee;

                $orderData['service_percent']               = $commisionAmount;

                $orderData['partial_amount']                = isset($partialAmount) ? $partialAmount : 0;


                $orderNo = self::seedOrderData($orderData);


                $orderData['order_amount']  = ( $orderData['partial_amount'] > 0 ) ? $orderData['partial_amount'] :  $totalAmount;

                $orderData['order_no']      = $orderNo;

                \DB::commit();
                
                self::paymentRedirection( $orderData );

            }
            catch(\Exception $e)
            {   
                \DB::rollBack();

                \Log::info(__CLASS__." ".__FUNCTION__." Exception occured while createing an order".print_r($e->getMessage(), TRUE) );

                $returnArr['success'] = false;
        
                $returnArr['message'] = 'partial Amount is zero, so cannot opt for cash payment';
        
                $returnArr['data']    = [];
            
                return $returnArr;
            }
            
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured Creating Order For Venue ".print_r( $e->getMessage(), true) );  
            
            throw new \Exception(" Exception Occured Creating Order For Venue ", 1); 
        }
        
    }

    public static function seedOrderData($orderArr)
    {
        
        $orderobj = Orders::create([
            'user_email'                => $orderArr['user_email'],
            'is_guest_user'             => $orderArr['is_guest_user'],
            'order_no'                  => strtoupper( substr(md5(microtime()),rand(0,26),6) ),
            'linkable_id'               => $orderArr['linkable_id'],
            'linkable_type'             => $orderArr['linkable_type'],
            'no_of_guests'              => $orderArr['no_of_guests'],
            'voucher_id'                => isset( $orderArr['voucher_id'] ) ? $orderArr['voucher_id'] : NULL,
            'payment_type_id'           => isset( $orderArr['payment_type_id'] ) ? $orderArr['payment_type_id'] : NULL,
            'voucher_amount'            => isset( $orderArr['voucher_amount'] ) ? $orderArr['voucher_amount'] : NULL,
            'total_amount'              => $orderArr['total_amount'],
            'discounted_amount'         => $orderArr['discounted_amount'],
            'net_total'                 => $orderArr['net_total'],
            'tax_amount'                => $orderArr['tax_amount'],
            'tax_percent'               => $orderArr['tax_percent'],
            'servic_fee'                => $orderArr['service_fee'],
            'service_percent'           => $orderArr['service_percent'],
            'booking_from_date'         => $orderArr['booking_from_date'],
            'booking_to_date'           => $orderArr['booking_to_date'],
            'is_partial_payment'        => $orderArr['is_partial_payment'],
            'partial_amount'            => $orderArr['partial_amount'],
            'created_by'                => $orderArr['user_email'],
            'updated_by'                => $orderArr['user_email']
        ]);


        if($orderArr['is_guest_user'])
        {
            try
            {   
                GuestUsers::create([
                    'user_email'            => $orderArr['user_email'],
                    'first_name'            => $orderArr['first_name'],
                    'fathers_name'          => $orderArr['fathers_name'],
                    'family_name'           => $orderArr['family_name'],
                    'country_code'          => $orderArr['country_code'],
                    'phone_no'              => $orderArr['phone_no'],
                    'customer_address'      => isset( $orderArr['customer_address'] ) ? $orderArr['customer_address'] : NULL ,
                    'created_by'            => $orderArr['user_email'],
                    'updated_by'            => $orderArr['user_email']
            
                ]);    
            }
            catch(\Exception $e)
            {
                \Log::info(__CLASS__." ".__FUNCTION__." It seems that email id does exist already ".print_r( $e->getMessage(), true) );  
            }
        }
        
        

        if(!$orderArr['self_booking'] )
        {
            guestBehalfBookings::create([
                'user_email'            => $orderArr['user_email'],
                'guest_first_name'      => $orderArr['guest_first_name'],
                'guest_fathers_name'    => $orderArr['guest_fathers_name'],
                'guest_family_name'     => $orderArr['guest_family_name'],
                'guest_email'           => $orderArr['guest_email'],
                'guest_country_code'    => isset( $orderArr['guest_country_code'] ) ? $orderArr['guest_country_code'] : NULL ,
                'guest_phone_no'        => isset( $orderArr['guest_phone_no'] ) ? $orderArr['guest_phone_no'] : NULL ,
            ]);
        }

        return $orderobj->order_no;

    }


    public static function paymentRedirection( $orderData )
    {   

        $paymentAuthtoken           = env('PAYMENT_AUTH_TOKEN');

        $orderAmount                = $orderData['order_amount'];

        $paymentChannel             = env('PAYMENT_CHANNEL');

        $currencyCode               = env('PAYMENT_CURRENCY_CODE');

        $itemId                     = env('PAYMENT_ITEM_ID');

        $language                   = 'En';

        $paymentMerchantId          = env('PAYMENT_MERCHANT_ID');

        $messageId                  = 1;

        $quantity                   = 1;

        $returnUrl                  = 'http://18.218.133.17/api/v1/payment/response';

        $transactionId              = $orderData['order_no'];

        $version                    = 2.0;

        $secureHash                 = $paymentAuthtoken.$orderAmount.$paymentChannel.$currencyCode.$itemId.$language
                                      .$paymentMerchantId.$messageId.$quantity.$returnUrl.$transactionId.$version;

    

        $secureHash    = trim( $secureHash );

        $secureHash    = str_replace(' ', '', $secureHash);

        $secureHashStr  =    hash('sha256',$secureHash);

echo <<< EOT
        <form id="form" action="https://srstaging.stspayone.com/SmartRoutePaymentWeb/SRPayMsgHandler" method="post">
            Amount: <input type="text" name="Amount" value="$orderAmount"><br>
            Currency Code: <input type="text" name="CurrencyISOCode" value="$currencyCode"><br>
            ItemID: <input type="text" name="ItemID" value="$itemId"><br>
            MessageID: <input type="text" name="MessageID" value="$messageId"><br>
            MerchantID: <input type="text" name="MerchantID" value="$paymentMerchantId"><br>
            TransactionID: <input type="text" name="TransactionID" value="$transactionId"><br>
            Language: <input type="text" name="Language" value="$language"><br>
            Version: <input type="text" name="Version" value="$version"><br>
            ResponseBackURL: <input type="text" name="ResponseBackURL" value="$returnUrl"><br>
            Quantity: <input type="text" name="Quantity" value="$quantity"><br>
            Channel: <input type="text" name="Channel" value="$paymentChannel"><br>
            SecureHash: <input type="text" name="SecureHash" value="$secureHashStr"><br>
        </form>

        <script>
            document.getElementById("form").submit();
        </script>
EOT;

    }


    public static function getNoOfDays($fromDate, $toDate)
    {
        $fromDate  = strtotime($fromDate);
        
        $toDate    = strtotime($toDate);
        
        $datediff  = $toDate - $fromDate;

        $noOfDays  = round( $datediff / (60 * 60 * 24 ) ) ;
        
        return empty( $noOfDays ) ? 1 : $noOfDays; 
    }


    /**
     * @param integer $linkableId
     * @param string $linkableType
     * @param date $bookingFromDate
     * @param date $bookingToDate
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function checkAvailability($linkableId, $linkableType, $bookingFromDate, $bookingToDate )
    {   
        try
        {
            $res = current(Orders::select('id')
                            ->where('linkable_id', $linkableId)
                            ->where('linkable_type', $linkableType)
                            ->where('is_cancelled', 1)
                            ->where('booking_from_date','>=', $bookingFromDate )
                            ->where('booking_to_date','<=', $bookingToDate )
                            ->limit(1)
                            ->get()
                            ->toArray()
                   );
            
            if(empty( $res ) )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Checking Date availability ".print_r( $e->getMessage(), true) );  
            
            throw new \Exception(" Exception Occured while Checking Date availability ", 1); 
        }
        
    }

    public static function calculateFeeAmount($amount, $feePercent)
    {
        return ( $amount * $feePercent / 100 );
        
    }


    public static function getPartialPaymentPercent($linkableId, $linkableType)
    {
        $partialPaymentArr = current(Pricings::select('partial_payment_fee')
                                        ->where('linkable_type', $linkableType)
                                        ->where('linkable_id', $linkableId)
                                        ->get()
                                        ->toArray()
                            );

        if(empty($partialPaymentArr))
        {
            return 0;
        }

        return $partialPaymentArr['partial_payment_fee'];
        
    }

   

    
}
