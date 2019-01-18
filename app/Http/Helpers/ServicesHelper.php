<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Services;
use App\Models\ServiceMenu;

class ServicesHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getServices( $linkableId, $linkableType )
    {   
        
        try
        {   
            $serviceDetails = Services::select( 'services_types.name as serviceName', 
                                                'services.order_no as displayOrder',
                                                'pricings.actual_price as actualPrice',
                                                'pricings.discount',
                                                'pricing_type.name as pricingType',
                                                'services.id as serviceId'
                                              )
                                    ->join('services_types', 'services_types.id', '=', 'services.service_type_id')
                                    ->join('pricings', 'services.linkable_id', '=', 'pricings.linkable_id')
                                    ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                    ->where('services.status', 1)
                                    ->where('services_types.status', 1)
                                    ->where('pricings.status', 1)
                                    ->where('pricing_type.status', 1)
                                    ->where('pricings.linkable_type', $linkableType)
                                    ->where('services.linkable_id', $linkableId)
                                    ->where('services.linkable_type', $linkableType)
                                    ->orderBy('services.order_no', 'asc')
                                    ->get()
                                    ->toArray();

            return $serviceDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Service Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Service Details", 1);

        }
       
    }

    /**
     * @param Array  $data
     *
     * @return Array
     *
     * @throws Exception
    */
    public static function getServiceMenu( $serviceIdArr )
    {   
        
        try
        {   
            $serviceMenuDetails = ServiceMenu::select( 'service_id as serviceId','name as serviceMenuName')
                                    ->where('status', 1)
                                    ->whereIn('service_id', $serviceIdArr)
                                    ->orderBy('order_no', 'asc')
                                    ->get()
                                    ->toArray();

            return $serviceMenuDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Service Menu Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Service Menu Details", 1);

        }
       
    }

    
    
}
