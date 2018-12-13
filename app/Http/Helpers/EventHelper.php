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
use App\Models\EventOrganisers;


use App\Http\Helpers\ThemeHelper;



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
            
             $returnArr['upcomingEvents'] = $eventsData;

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
    public static function eventOrgainsersList()
    {   
        $returnArr = [];

        try
        {  

             $eventOrganisersData = EventOrganisers::select( 'event_organisers.id as eventOrganisersId',
                                                             'event_organisers.name as eventOrgainsersName',
                                                             'event_organisers.short_description as eventShortDescription',
                                                             'event_organisers.order_no as displayOrder',
                                                             'event_organisers.rating',
                                                             'event_organisers.twitter_link as twitterLink',
                                                             'event_organisers.fb_link as fbLink',
                                                             'address.address_line_1 as AddressLine_1',
                                                             'address.address_line_2 as AddressLine_2',
                                                             'address.google_map_link as googleMapLink',
                                                             'cities.name as cityName',
                                                             'files.file_path as filePath'
                                                          )
                            ->join('address', 'event_organisers.id', '=', 'address.linkable_id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->join('files', 'event_organisers.id', '=', 'files.linkable_id')
                            ->where('address.linkable_type', 'event_organisers')
                            ->where('files.linkable_type', 'event_organisers')
                            ->where('files.file_type', 'home_page_display')
                            ->where('address.status', 1)
                            ->where('event_organisers.status', 1)
                            ->where('files.status', 1)
                            ->where('cities.status', 1)
                            ->where('address.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('event_organisers.order_no', 'asc')
                            ->paginate(2);

            if( empty($eventOrganisersData) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Event Organisers Data does not exists ");

                return [];
                
            }

            $eventOrganisersArr     = $eventOrganisersData->toArray();
            
            $eventOrganisersIdArr   = array_column($eventOrganisersArr['data'], 'eventOrganisersId');
 
            $eventCoversData        = ThemeHelper::getEventCovers($eventOrganisersIdArr, 'event_organisers');

            $eventCoversArr = [];
            $priceArr       = [];

            foreach ($eventCoversData as $key => $value) 
            {   
                 
                usort($value['price'], function($a, $b) {
                        return $a['actualPrice'] <=> $b['actualPrice'];
                });
                
                $eventCoversArr[$key]   = array_values ( array_unique( $value['event_covers'] ) );
                
                $priceArr[$key]   = $value['price'][0];
            }

            $eventArr = [];

            foreach ($eventOrganisersArr['data'] as $key => $value) {
                
                $value['event_covers'] = isset( $eventCoversArr[$value['eventOrganisersId'] ] ) ? $eventCoversArr[$value['eventOrganisersId']] : [];
                
                $value['price'] = isset( $priceArr[$value['eventOrganisersId'] ] ) ? $priceArr[$value['eventOrganisersId']] : [];

                array_push($eventArr,$value);

            }

            unset($eventOrganisersArr['data']);

            $returnArr['eventOrganiserslist']   = $eventArr;
            
            $returnArr['paginate']              = $eventOrganisersArr;
            

            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Event Organisers Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Event Organisers Listings", 1);

        }
       
    }


    /**
     *
     * @return Array
    */
    public static function getEventOrgainserDetails( $id )
    {   
        $returnArr = [];

        try
        {  

             $eventOrganisersArr = current(EventOrganisers::select( 'event_organisers.id as eventOrganisersId',
                                                             'event_organisers.name as eventOrgainsersName',
                                                             'event_organisers.short_description as eventShortDescription',
                                                             'event_organisers.order_no as displayOrder',
                                                             'event_organisers.rating',
                                                             'event_organisers.twitter_link as twitterLink',
                                                             'event_organisers.fb_link as fbLink',
                                                             'address.address_line_1 as AddressLine_1',
                                                             'address.address_line_2 as AddressLine_2',
                                                             'address.google_map_link as googleMapLink',
                                                             'cities.name as cityName',
                                                             'vendors.vendor_name as vendorName',
                                                             'vendors.license_no as licenseNo'
                                                          )
                            ->join('address', 'event_organisers.id', '=', 'address.linkable_id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->join('vendors', 'vendors.id', '=', 'event_organisers.vendor_id')
                            ->where('address.linkable_type', 'event_organisers')
                            ->where('address.status', 1)
                            ->where('event_organisers.status', 1)
                            ->where('cities.status', 1)
                            ->where('address.status', 1)
                            ->where('cities.status', 1)
                            ->where('event_organisers.id', $id)
                            ->orderBy('event_organisers.order_no', 'asc')
                            ->get()
                            ->toArray() );

            if( empty($eventOrganisersArr) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Event Organisers Data does not exists ");

                return [];
                
            }
            
            /* fetch files */

            $fileData                           = FileHelper::getFiles( [ $id ], 'event_organisers');

            $eventOrganisersArr['files']        = empty($fileData) ? [] : $fileData;

            /* fetch themes */ 

            $themesData                         = ThemeHelper::getEventCovers([ $id ], 'event_organisers');
            

            $themesData                         = $themesData[$id]['themes'];
            
            $themesArr                          = [];
            
            foreach ($themesData as $key => $value) 
            {   
                 $themesArr['all'][]                   = [  
                                                        'themeName'     => $value['name'], 
                                                        'actualPrice'   => $value['actualPrice'], 
                                                        'filePath'      => $value['filePath'],
                                                        'pricingType'   => $value['pricingType'] 
                                                      ];
                                                      
                $themesArr[$value['eventTypes']][] = [  
                                                        'themeName'     => $value['name'], 
                                                        'actualPrice'   => $value['actualPrice'], 
                                                        'filePath'      => $value['filePath'],
                                                        'pricingType'   => $value['pricingType'] 
                                                     ];

               
            }
            
            $eventOrganisersArr['themes']       = $themesArr;
            

            return $eventOrganisersArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Event Organisers Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Event Organisers Listings", 1);

        }
       
    }
    
}
