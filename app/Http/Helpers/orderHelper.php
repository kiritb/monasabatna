<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Orders;
use App\Models\Pricings;
use App\Models\Services;


class orderHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function createOrder( $orderData, $guestDataArr = [] )
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
            switch ($linkableType) 
            {
                case 'vennues':
                    self::createOrderVennue($orderData, $guestDataArr);
                    break;
                case 'events':
                    self::createOrderEvents($orderData, $guestDataArr);
                    break;
                case 'packages':
                    self::createOrderPackages($orderData, $guestDataArr);
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
    public static function createOrderVennue($orderData, $guestDataArr )
    {   

        $serviceIdArr = Services::select('id')
                                ->where('linkable_id', $orderData['linkable_id'])
                                ->where('linkable_type', $orderData['linkable_type'])
                                ->where('status', 1)
                                ->get()
                                ->toArray();
        
        $linkableIdArr  = $orderData['linkable_id'];

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
            throw new Exception("No pricing Data Found", 1);
            
        }

        try
        {   
            $amount = 0.00;

            foreach ($pricingArr as $key => $value) 
            {
                if($value['person'])
                {
                    $amount = $amount + ($value['actual_price'] * $orderData['no_of_guests']);
                }
                else if($value['day'])
                {
                    $amount = $amount + ($value['actual_price'] * $noOfDays);
                }
            }

            if(empty($amount))
            {
                throw new Exception("Amount to Pay cannot be zero", 1);
                
            }
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Checking Date availability ".print_r( $e->getMessage(), true) );  
            
            throw new \Exception(" Exception Occured while Checking Date availability ", 1); 
        }
        
    }

    public static function getNoOfDays($fromDate, $toDate)
    {
        $fromDate  = strtotime($fromDate);
        
        $toDate    = strtotime($toDate);
        
        $datediff  = $toDate - $fromDate;

        $noOfDays  = round($datediff / (60 * 60 * 24) ) ) ;
        
        return empty( $noOfDays ) 1 : $noOfDays; 
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
                            ->where('linkable_id', $linkableId)
                            ->where('is_cancelled', 1)
                            ->where('booking_from_date','>=', $bookingFromDate )
                            ->where('booking_to_date','<=', $bookingToDate )
                            ->limt(1)
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
    
}
