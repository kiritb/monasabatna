<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Packages;

class PackageHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getEventCovers( $linkableIdArr, $linkableType )
    {   
        $returnArr      = [];
        
        $coversArr      = [];

        try
        {   
            $eventCoversDetails = Packages::select(     
                                                        'packages.linkable_id as eventOrganiserId', 
                                                        'event_types.name as eventTypes',
                                                        'event_types.id as eventTypeId',
                                                        'packages.name',
                                                        'packages.short_description as aboutPackage',
                                                        'pricings.actual_price as actualPrice',
                                                        'pricings.discount',
                                                        'pricing_type.name as pricingType'
                                            )
                                            ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'packages.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->whereIn('packages.linkable_id', $linkableIdArr)
                                            ->where('packages.linkable_type', $linkableType)
                                            ->where('pricings.linkable_type', 'packages')
                                            ->where('pricings.status', 1)
                                            ->where('event_types.status', 1)
                                            ->orderBy('packages.order_no', 'asc')
                                            ->get()
                                            ->toArray();

            foreach ($eventCoversDetails as $key => $values) 
            {

                $returnArr[$values['eventOrganiserId']]['event_covers'][]   = $values['eventTypes'];

                $returnArr[$values['eventOrganiserId']]['price'][]          = ['pricingType' => $values['pricingType'], 'actualPrice' => $values['actualPrice'] ];

            }
            
            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching event Covers Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching event Covers Details", 1);

        }
       
    }

     /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getThemeDetails( $themeId )
    {   
        $returnArr      = [];
        
        try
        {   
            $themeDetail = PackageTypes::select(   'event_types.name as eventName',
                                                        'package_types.name as themeName',
                                                        'package_types.short_description as aboutTheme',
                                                        'package_types.set_up_time as setUpTime',
                                                        'package_types.note',
                                                        'pricings.actual_price as actualPrice',
                                                        'pricings.discount',
                                                        'pricing_type.name as pricingType'
                                                   )
                                            
                                            ->join('event_types', 'event_types.id', '=', 'package_types.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'package_types.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->where('pricings.linkable_type', 'themes')
                                            ->where('package_types.id', $themeId)
                                            ->where('event_types.status', 1)
                                            ->where('package_types.status', 1)
                                            ->get()
                                            ->toArray();

            
            return $themeDetail;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Theme  Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching Theme Details", 1);

        }
       
    }

    
}
