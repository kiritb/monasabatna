<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;


use App\Models\Files;
use App\Models\Pricings;
use App\Models\Vennues;
use App\Models\Vendors;
use App\Models\Amenities;
use App\Models\AmenitieTypes;
use App\Models\Events;

use App\Http\Helpers\AmmenitieHelper;
use App\Http\Helpers\FileHelper;
use App\Http\Helpers\ReviewsHelper;
use App\Http\Helpers\PoliciesHelper;
use App\Http\Helpers\ServicesHelper;



class VennueHelper
{   
    /**
     *
     * @return Array
    */
    public static function vennueListing()
    {   
        $returnArr = [];

        try
        {  

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName','vennues.short_description as vennueShortDescription',
                                          'vennues.start_time as vennueStartTime','vennues.order_no as displayOrder',
                                          'vennues.is_express_deal as isExpressDeal' , 'vennues.rating',
                                          'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                                          'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType', 'files.file_path as filePath')
                            ->join('address', 'vennues.id', '=', 'address.linkable_id')
                            ->join('files', 'vennues.id', '=', 'files.linkable_id')
                            ->join('pricings', 'vennues.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'vennues')
                            ->where('files.linkable_type', 'vennues')
                            ->where('files.file_type', 'home_page_display')
                            ->where('pricings.linkable_type', 'vennues')
                            ->where('address.status', 1)
                            ->where('vennues.status', 1)
                            ->where('files.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('vennues.order_no', 'asc')
                            ->paginate(2);

            if( empty($vennueData) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Vennue Data does not exists ");

                return [];
                
            }

            $venneDataArr = $vennueData->toArray();
            
            $vennueIdArr  = array_column($venneDataArr['data'], 'vennueId');
 
            $ammentiesData =    AmmenitieHelper::getAmmenties($vennueIdArr ,'vennues');

            $ammentiesDataArr = [];

            if(!empty($ammentiesData))
            {
                foreach ($ammentiesData as $key => $value) 
                {
                    $ammentiesDataArr[$value['vennueId']][] = $value['amenitieName']; 
                }    
            }
            
            $vennuesArr = [];

            foreach ($venneDataArr['data'] as $key => $value) {
                
                $value['ammenties'] = isset( $ammentiesDataArr[$value['vennueId'] ] ) ? $ammentiesDataArr[$value['vennueId']] : [];
                
                array_push($vennuesArr,$value);

            }
            unset($venneDataArr['data']);

            $returnArr['vennueLists'] = $vennuesArr;
            $returnArr['paginate']    = $venneDataArr;

            
            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    /**
     *
     * @return Array
    */
    public static function venueDetails( $vennueId )
    {   
        $returnArr = [];

        try
        {  

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName','vennues.short_description as vennueShortDescription',
                                          'vennues.start_time as vennueStartTime',
                                          'vennues.is_express_deal as isExpressDeal' , 'vennues.rating',
                                          'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                                          'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType')
                            ->join('address', 'vennues.id', '=', 'address.linkable_id')
                            ->join('pricings', 'vennues.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'vennues')
                            ->where('pricings.linkable_type', 'vennues')
                            ->where('address.status', 1)
                            ->where('vennues.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->where('vennues.id', $vennueId)
                            ->get();

            if( empty($vennueData) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Vennue Data does not exists ");

                return [];
                
            }

            $venneDataArr           =   current( $vennueData->toArray() );
            
            /* fetch Ameneties for Vennue Id */

            $ammentiesData                  =   AmmenitieHelper::getAmmenties([ $vennueId ] ,'vennues');
                        
            $venneDataArr['ammenties']       = empty($ammentiesData) ? [] : $ammentiesData;

            /* fetch Files for Vennue Id */

            $fileData = FileHelper::getFiles([$vennueId], 'vennues');

            $venneDataArr['files']       = empty($fileData) ? [] : $fileData;

            /* Fetch Reviews for user */

            $reviewData = ReviewsHelper::getReviews($vennueId, 'vennues');

            $venneDataArr['reviews']       = empty($reviewData) ? [] : $reviewData;

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($vennueId, 'vennues');

            $venneDataArr['policies']       = empty($policyData) ? [] : $policyData;            
            
            $serviceData =  ServicesHelper::getServices($vennueId, 'vennues');

            $venneDataArr['services']       = empty($serviceData) ? [] : $serviceData;            

            return $venneDataArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    /**
     *
     * @return Array
    */
    public static function getExpressDeals()
    {   
        $returnArr = [];

        try
        {  

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName','vennues.short_description as vennueShortDescription',
                                          'vennues.start_time as vennueStartTime','vennues.order_no as displayOrder',
                                          'vennues.is_express_deal as isExpressDeal' , 'vennues.rating',
                                          'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                                          'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType', 'files.file_path as filePath')
                            ->join('address', 'vennues.id', '=', 'address.linkable_id')
                            ->join('files', 'vennues.id', '=', 'files.linkable_id')
                            ->join('pricings', 'vennues.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'vennues')
                            ->where('files.linkable_type', 'vennues')
                            ->where('vennues.is_express_deal', 1)
                            ->where('files.file_type', 'home_page_display')
                            ->where('pricings.linkable_type', 'vennues')
                            ->where('address.status', 1)
                            ->where('vennues.status', 1)
                            ->where('files.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('vennues.order_no', 'asc')
                            ->get()
                            ->toArray();

            $returnArr['vennues'] = empty( $vennueData ) ? [] : $vennueData;


            $eventsData = Events::select('events.name as eventName','events.short_description as eventShortDescription','events.start_date as vennueStartTime', 
                                          'events.end_date as eventEndTime','events.order_no as displayOrder','event_types.name as eventType',
                                          'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                                          'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType','files.file_path as filePath')
                            ->join('address', 'events.id', '=', 'address.linkable_id')
                            ->join('files', 'events.id', '=', 'files.linkable_id')
                            ->join('pricings', 'events.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->join('event_types', 'event_types.id', '=', 'events.event_type_id')
                            ->where('address.linkable_type', 'events')
                            ->where('files.linkable_type', 'events')
                            ->where('events.is_express_deal', 1)
                            ->where('files.file_type', 'home_page_display')
                            ->where('pricings.linkable_type', 'events')
                            ->where('events.home_page_display', 1)
                            ->where('events.start_date', '>', date('Y-m-d'))
                            ->where('address.status', 1)
                            ->where('events.status', 1)
                            ->where('files.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('events.order_no', 'asc')
                            ->get()
                            ->toArray();

            $returnArr['upcomingevents'] = empty( $eventsData ) ? [] : $eventsData;


            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    /**
     *
     * @return Array
    */
    public static function generateOrderForVennue( $vennueId )
    {   
        $returnArr = [];

        try
        {  

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName','vennues.short_description as vennueShortDescription',
                                          'vennues.start_time as vennueStartTime','vennues.order_no as displayOrder',
                                          'vennues.is_express_deal as isExpressDeal' , 'vennues.rating',
                                          'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                                          'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType', 'files.file_path as filePath')
                            ->join('address', 'vennues.id', '=', 'address.linkable_id')
                            ->join('files', 'vennues.id', '=', 'files.linkable_id')
                            ->join('pricings', 'vennues.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'vennues')
                            ->where('files.linkable_type', 'vennues')
                            ->where('vennues.is_express_deal', 1)
                            ->where('files.file_type', 'home_page_display')
                            ->where('pricings.linkable_type', 'vennues')
                            ->where('address.status', 1)
                            ->where('vennues.status', 1)
                            ->where('files.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('vennues.order_no', 'asc')
                            ->get()
                            ->toArray();


            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    
}
