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
                                                        'packages.id as packageId', 
                                                        'event_types.name as eventTypes',
                                                        'event_types.id as eventTypeId',
                                                        'packages.name',
                                                        'packages.short_description as aboutPackage',
                                                        'pricings.actual_price as actualPrice',
                                                        'pricings.discount',
                                                        'pricing_type.name as pricingType',
                                                        'files.file_path as filePath',
                                                        'packages.set_up_time as setUpTime',
                                                        'packages.note as travelNote',
                                                        'packages.created_at'
                                            )
                                            ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'packages.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->join('files', 'files.linkable_id', '=', 'packages.id')
                                            ->whereIn('packages.linkable_id', $linkableIdArr)
                                            ->where('packages.linkable_type', $linkableType)
                                            ->where('pricings.linkable_type', 'packages')
                                            ->where('files.linkable_type','packages')
                                            ->where('files.file_type', 'home_page_display')
                                            ->where('pricings.status', 1)
                                            ->where('files.status',1)
                                            ->where('event_types.status', 1)
                                            ->orderBy('packages.order_no', 'asc')
                                            ->orderBy('packages.created_at', 'desc')
                                            ->get()
                                            ->toArray();
                                            
            foreach ($eventCoversDetails as $key => $values) 
            {

                $returnArr[$values['eventOrganiserId']]['event_covers'][]   = $values['eventTypes'];

                $returnArr[$values['eventOrganiserId']]['price'][]          = ['pricingType' => $values['pricingType'], 'actualPrice' => $values['actualPrice'] ];

                $returnArr[$values['eventOrganiserId']]['packages'][]       = $values;

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
    public static function getPackageDetails( $packageId, $linkableType )
    {   
        
        try
        {   
            $packageDetals = Packages::select(  'event_types.name as eventName',
                                                'packages.short_description as aboutPackage',
                                                'pricings.actual_price as actualPrice',
                                                'pricings.discount',
                                                'pricings.cancellation_fee_before_12_hours as cancellationFeeBefore12Hours',
                                                'pricings.cancellation_fee_before_24_hours as cancellationFeeBefore24Hours',
                                                'pricings.cancellation_fee_before_48_hours as cancellationFeeBefore48Hours',
                                                'pricings.partial_payment_fee as partialPaymentFee',
                                                'pricing_type.name as pricingType',
                                                'packages.name as packageName',
                                                'packages.set_up_time as setUpTime',
                                                'packages.note'
                                            )
                                            ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                                            ->join('pricings', 'pricings.linkable_id', '=', 'packages.id')
                                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                                            ->where('pricings.linkable_type', 'packages')
                                            ->where('packages.id', $packageId)
                                            ->where('packages.linkable_type', $linkableType)
                                            ->where('event_types.status', 1)
                                            ->where('packages.status', 1)
                                            ->get()
                                            ->toArray();

            
            return $packageDetals;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Package  Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching Package Details", 1);

        }
       
    }

    public static function getRecommendedPackages($packageId, $linkableType, $eventName)
    {

        $recommendedPcakges = Packages::select(  
                                                 'packages.id as packageId',
                                                 'packages.name as packageName',
                                                 'files.file_path as filePath'
                                        )
                                        ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                                        ->join('files', 'files.linkable_id', '=', 'packages.id')
                                        ->where('files.linkable_type','packages')
                                        ->where('files.file_type', 'home_page_display')
                                        ->where('packages.linkable_type', $linkableType)
                                        ->where('packages.id','!=', $packageId)
                                        ->where('event_types.name', $eventName)
                                        ->where('event_types.status', 1)
                                        ->where('packages.status', 1)
                                        ->get()
                                        ->toArray();
        return $recommendedPcakges;
    }

    
}
