<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\ServiceFee;

class ServiceFeeHelper
{   
    /**
     * 
     *
     * @return Array
    */
    public static function getServiceCharges( )
    {   
        
        try
        {   
            $serviceFeeDetails = current(ServiceFee::select('service_tax', 'booking_commisssion', 'express_deals_commisssion', 'cancellation_commisssion')
                                        ->where('status', 1)
                                        ->get()
                                        ->toArray()
                                 );

            return $serviceFeeDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching service fee details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching service fee details", 1);

        }
       
    }

    
}
