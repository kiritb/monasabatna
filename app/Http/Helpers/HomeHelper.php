<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Events;
use App\Models\Files;
use App\Models\Pricings;
use App\Models\Vennues;
use App\Models\Partners;
use App\Models\Testimonials;
use App\Models\Vendors;
use App\Models\Users;
use App\Models\EventOrganisers;

class HomeHelper
{   
    /**
     *
     * @return Array
    */
    public static function buildHomePageData( )
    {   
        $returnArr = [];

        try
        {  

            $vennueData = Vennues::select('vennues.name as vennueName','vennues.short_description as vennueShortDescription','vennues.start_time as vennueStartTime','vennues.order_no as displayOrder',
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
                            ->where('vennues.home_page_display', 1)
                            ->where('vennues.is_express_deal', 1)
                            ->where('address.status', 1)
                            ->where('vennues.status', 1)
                            ->where('files.status', 1)
                            ->where('pricings.status', 1)
                            ->where('pricing_type.status', 1)
                            ->where('cities.status', 1)
                            ->orderBy('vennues.order_no', 'asc')
                            ->take(4)
                            ->get(); 

            if( empty($vennueData) )
            {
                \Log::info(__CLASS__." ".__FUNCTION__." Vennue Data does not exists ");
                
            }
            
            $returnArr['expressDeals'] = $vennueData;

            $eventsData = Events::select('events.name as eventName','events.short_description as eventShortDescription','events.start_date as vennueStartTime', 'events.order_no as displayOrder',
                             'address.address_line_1 as AddressLine_1','address.address_line_2 as AddressLine_2','address.google_map_link as googleMapLink','cities.name as cityName',
                             'pricings.actual_price as actualPrice','pricings.discount','pricing_type.name as pricingType','files.file_path as filePath')
                            ->join('address', 'events.id', '=', 'address.linkable_id')
                            ->join('files', 'events.id', '=', 'files.linkable_id')
                            ->join('pricings', 'events.id', '=', 'pricings.linkable_id')
                            ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
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
                            ->take(4)
                            ->get(); 

            $returnArr['upcomingEvents'] = $eventsData;

            $partnersData = Partners::select('partners.name as partnerName','partners.order_no as displayOrder', 'files.file_path as filePath')
                                ->join('files', 'partners.id', '=', 'files.linkable_id')
                                ->where('files.linkable_type', 'partners')
                                ->where('files.file_type', 'home_page_display')
                                ->where('files.status', 1)
                                ->orderBy('partners.order_no', 'asc')
                                ->take(5)
                                ->get(); 
            
            $returnArr['partners'] = $partnersData;

            $testimonials = Testimonials::select('testimonials.testimonial','files.file_path as filePath', 'users.first_name')
                                ->join('users', 'testimonials.user_id', '=', 'users.id')
                                ->join('files', 'testimonials.user_id', '=', 'files.linkable_id')
                                ->where('files.linkable_type', 'users')
                                ->where('files.status', 1)
                                ->where('users.status', 1)
                                ->where('testimonials.is_approved', 1)
                                ->orderBy('testimonials.id', 'desc')
                                ->take(5)
                                ->get(); 
            
            $returnArr['testimonials'] = $testimonials;

            $vennuesCount           = Vennues::where('status', 1)->count();

            $eventsCount            = Events::where('status', 1)->count();

            $vendersCount           = Vendors::where('status', 1)->count();

            $usersCount             = users::where('status', 1)->count();

            $eventOrganisersCount   = EventOrganisers::where('status', 1)->count();
            
            $returnArr['totalVennues']           = $vennuesCount;
            $returnArr['totalEvents']            = $eventsCount;
            $returnArr['totalVendors']           = $vendersCount;
            $returnArr['totalUsers']             = $usersCount;
            $returnArr['totalEventOrganisers']   = $eventOrganisersCount;

            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Home Page Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Home Page Details", 1);

        }
       
    }

    
}
