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
use App\Models\Events;
use App\Models\Vendors;
use App\Models\Amenities;
use App\Models\AmenitieTypes;

class EventHelper
{   
    /**
     *
     * @return Array
    */
    public static function eventListing()
    {   
        $returnArr = [];

        try
        {  

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
                            ->paginate(2);

            if( empty($eventsData) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Vennue Data does not exists ");

                return [];
                
            }

            // $venneDataArr = $vennueData->toArray();
            
            // $vennueIdArr  = array_column($venneDataArr['data'], 'vennueId');
 
            // $ammentiesData =    Amenities::select('amenities.linkable_id as vennueId', 'amenitie_types.name as amenitieName', 'amenities.order_no as amenitieDisplayOrder')
            //                                 ->join('amenitie_types', 'amenitie_types.id', '=', 'amenities.amenitie_type_id')
            //                                 ->where('amenities.linkable_type', 'vennues')
            //                                 ->where('amenitie_types.status', 1)
            //                                 ->where('amenities.status', 1)
            //                                 ->whereIn('amenities.linkable_id', $vennueIdArr)
            //                                 ->orderBy('amenities.order_no', 'asc')
            //                                 ->get()
            //                                 ->toArray();

            // $ammentiesDataArr = [];

            // foreach ($ammentiesData as $key => $value) 
            // {
            //     $ammentiesDataArr[$value['vennueId']][] = $value['amenitieName']; 
            // }
            
            // $vennuesArr = [];

            // foreach ($venneDataArr['data'] as $key => $value) {
                
            //     $value['ammenties'] = isset( $ammentiesDataArr[$value['vennueId'] ] ) ? $ammentiesDataArr[$value['vennueId']] : [];
                
            //     array_push($vennuesArr,$value);

            // }
            // unset($venneDataArr['data']);

            // $returnArr['vennueLists'] = $vennuesArr;
            // $returnArr['paginate']    = $venneDataArr;

            
             $returnArr['upcomingEvents'] = $eventsData;

             return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    
}
