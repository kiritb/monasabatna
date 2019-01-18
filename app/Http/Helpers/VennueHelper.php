<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Http\Helpers\AmmenitieHelper;
use App\Http\Helpers\FileHelper;
use App\Http\Helpers\FilterHelper;
use App\Http\Helpers\MiscHelper;
use App\Http\Helpers\PoliciesHelper;
use App\Http\Helpers\ReviewsHelper;
use App\Http\Helpers\ServicesHelper;
use App\Models\AmenitieTypes;
use App\Models\Events;
use App\Models\EventTypes;
use App\Models\RoomTypes;
use App\Models\ServicesTypes;
use App\Models\Vennues;
use App\Models\VennueTypes;

class VennueHelper
{
    /**
     *
     * @return Array
     */
    public static function vennueListing($filterArr = [])
    {
        $returnArr = [];

        try
        {

            $vennueSql = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName', 'vennues.short_description as vennueShortDescription',
                'vennues.start_time as vennueStartTime', 'vennues.order_no as displayOrder',
                'vennues.is_express_deal as isExpressDeal', 'vennues.rating',
                'address.address_line_1 as AddressLine_1', 'address.address_line_2 as AddressLine_2', 'address.google_map_link as googleMapLink', 'cities.name as cityName',
                'pricings.actual_price as actualPrice', 'pricings.discount', 'pricing_type.name as pricingType', 'files.file_path as filePath')
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
                ->where('cities.status', 1);

            if (isset($filterArr['price_range']) && !empty($filterArr['price_range'])) {
                $priceRange = $filterArr['price_range'];

                $priceArr = MiscHelper::getPriceFilter($priceRange);

                $minPrice = reset($priceArr);

                $maxPrice = end($priceArr);

                $vennueSql = $vennueSql->whereBetween('pricings.actual_price', [$minPrice, $maxPrice]);

            }

            if (isset($filterArr['seating_capacity']) && !empty($filterArr['seating_capacity'])) {
                $seatingCapacity = $filterArr['seating_capacity'];

                $capacityArr = MiscHelper::getPriceFilter($seatingCapacity);

                $minCap = reset($capacityArr);

                $maxCap = end($capacityArr);

                $vennueSql = $vennueSql->where('vennues.min_guest_cap', '>=', $minCap)
                    ->where('vennues.max_guest_cap', '<=', $maxCap);

            }

            if (isset($filterArr['ammenties_types']) && !empty($filterArr['ammenties_types'])) {
                $vennueSql->join('amenities', 'amenities.linkable_id', '=', 'vennues.id')
                    ->join('amenitie_types', 'amenitie_types.id', '=', 'amenities.amenitie_type_id')
                    ->whereIn('amenitie_types.name', $filterArr['ammenties_types']);

            }

            if (isset($filterArr['vennue_types']) && !empty($filterArr['vennue_types'])) {
                $vennueSql->join('vennue_type_mapping', 'vennue_type_mapping.vennue_id', '=', 'vennues.id')
                    ->join('vennue_types', 'vennue_types.id', '=', 'vennue_type_mapping.venue_type_id')
                    ->whereIn('vennue_types.name', $filterArr['vennue_types']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $vennueSql->join('vennue_event_mapping', 'vennue_event_mapping.vennue_id', '=', 'vennues.id')
                    ->join('event_types', 'event_types.id', '=', 'vennue_event_mapping.event_type_id')
                    ->whereIn('event_types.name', $filterArr['event_types']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $vennueSql->join('vennue_event_mapping', 'vennue_event_mapping.vennue_id', '=', 'vennues.id')
                    ->join('event_types', 'event_types.id', '=', 'vennue_event_mapping.event_type_id')
                    ->whereIn('event_types.name', $filterArr['event_types']);

            }

            if (isset($filterArr['room_types']) && !empty($filterArr['room_types'])) {
                $vennueSql->join('vennue_room_mapping', 'vennue_room_mapping.vennue_id', '=', 'vennues.id')
                    ->join('room_types', 'room_types.id', '=', 'vennue_room_mapping.room_type_id')
                    ->whereIn('room_types.name', $filterArr['room_types']);

            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $vennueSql->join('orders', 'orders.linkable_id', '=', 'vennues.id')
                    ->where('orders.linkable_type', 'vennues')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $vennueSql->where('vennues.is_express_deal', 1);

            }

            if (isset($filterArr['sort']) && !empty($filterArr['sort'])) {
                if ($filterArr['sort'] == 'asc' || $filterArr['sort'] == 'desc') {
                    $vennueSql->orderBy('pricings.actual_price', $filterArr['sort']);
                }

            }

            $vennueData = $vennueSql->orderBy('vennues.order_no', 'asc')
                ->paginate(2);

            $venneDataArr = $vennueData->toArray();

            if ($venneDataArr['data'] == 0) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Vennue Data does not exists ");

                return [];

            }

            $vennueIdArr = array_column($venneDataArr['data'], 'vennueId');

            $ammentiesData = AmmenitieHelper::getAmmenties($vennueIdArr, 'vennues');

            $ammentiesDataArr = [];

            if (!empty($ammentiesData)) {
                foreach ($ammentiesData as $key => $value) {
                    $ammentiesDataArr[$value['vennueId']][] = $value['amenitieName'];
                }
            }

            $vennuesArr = [];

            foreach ($venneDataArr['data'] as $key => $value) {

                $value['ammenties'] = isset($ammentiesDataArr[$value['vennueId']]) ? $ammentiesDataArr[$value['vennueId']] : [];

                array_push($vennuesArr, $value);

            }
            unset($venneDataArr['data']);

            $returnArr['vennueLists'] = $vennuesArr;
            $returnArr['paginate']    = $venneDataArr;

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Vennue Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function venueDetails($vennueId)
    {
        $returnArr = [];

        try
        {  

                'vennues.start_time as vennueStartTime', 'vennues.end_time as vennueEndTime', 'vennues.min_guest_cap as MinGuestCap', 'vennues.max_guest_cap as MaxGuestCap',
                'vennues.is_express_deal as isExpressDeal', 'vennues.rating',
                'address.address_line_1 as AddressLine_1', 'address.address_line_2 as AddressLine_2', 'address.google_map_link as googleMapLink', 'cities.name as cityName',
                'pricings.actual_price as actualPrice', 'pricings.discount', 'pricing_type.name as pricingType',
                'vendors.vendor_name as vendorName',
                'vendors.license_no as licenseNo')
                ->join('address', 'vennues.id', '=', 'address.linkable_id')
                ->join('pricings', 'vennues.id', '=', 'pricings.linkable_id')
                ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                ->join('cities', 'address.city_id', '=', 'cities.id')
                ->join('vendors', 'vendors.id', '=', 'vennues.vendor_id')
                ->where('address.linkable_type', 'vennues')
                ->where('pricings.linkable_type', 'vennues')
                ->where('address.status', 1)
                ->where('vennues.status', 1)
                ->where('pricings.status', 1)
                ->where('pricing_type.status', 1)
                ->where('cities.status', 1)
                ->where('vennues.id', $vennueId)
                ->get();

            if (empty($vennueData)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Vennue Data does not exists ");
                return [];

            }

            $venneDataArr = current($vennueData->toArray());

            /* fetch Ameneties for Vennue Id */

            $ammentiesData = AmmenitieHelper::getAmmenties([$vennueId], 'vennues');

            $venneDataArr['ammenties'] = empty($ammentiesData) ? [] : $ammentiesData;

            /* fetch Files for Vennue Id */

            $fileData = FileHelper::getFiles([$vennueId], 'vennues');

            $venneDataArr['files'] = empty($fileData) ? [] : $fileData;

            /* Fetch Reviews for user */

            $reviewData = ReviewsHelper::getReviews($vennueId, 'vennues');

            $venneDataArr['reviews'] = empty($reviewData) ? [] : $reviewData;

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($vennueId, 'vennues');

            $venneDataArr['policies'] = empty($policyData) ? [] : $policyData;

            $serviceData = ServicesHelper::getServices($vennueId, 'vennues');

            $serviceMenuArr = [];

            if(!empty($serviceData))
            {
                $serviceIdArr = array_column($serviceData, 'serviceId');

                $serviceMenuDetails = ServicesHelper::getServiceMenu( $serviceIdArr );

                foreach ($serviceMenuDetails as $key => $value) {
                    $serviceMenuArr[$value['serviceId']][] = $value['serviceMenuName']; 
                }
            }
            
            foreach ($serviceData as $key => $value) {
                
                $serviceMenuDetails = ServicesHelper::getServiceMenu([ $value['serviceId'] ]);
                
                $serviceData[$key]['serviceMenu'] = isset( $serviceMenuArr[$value['serviceId']] ) ? $serviceMenuArr[$value['serviceId']] : [];
            }

            $venneDataArr['services'] = empty($serviceData) ? [] : $serviceData;

            return $venneDataArr;
        } catch (\Exception $e) {
            
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Vennue Listings " . print_r($e->getMessage(), true));

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

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName', 'vennues.short_description as vennueShortDescription',
                'vennues.start_time as vennueStartTime', 'vennues.order_no as displayOrder',
                'vennues.is_express_deal as isExpressDeal', 'vennues.rating',
                'address.address_line_1 as AddressLine_1', 'address.address_line_2 as AddressLine_2', 'address.google_map_link as googleMapLink', 'cities.name as cityName',
                'pricings.actual_price as actualPrice', 'pricings.discount', 'pricing_type.name as pricingType', 'files.file_path as filePath')
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

            $returnArr['vennues'] = empty($vennueData) ? [] : $vennueData;

            $eventsData = Events::select('events.name as eventName', 'events.short_description as eventShortDescription', 'events.start_date as vennueStartTime',
                'events.end_date as eventEndTime', 'events.order_no as displayOrder', 'event_types.name as eventType',
                'address.address_line_1 as AddressLine_1', 'address.address_line_2 as AddressLine_2', 'address.google_map_link as googleMapLink', 'cities.name as cityName',
                'pricings.actual_price as actualPrice', 'pricings.discount', 'pricing_type.name as pricingType', 'files.file_path as filePath')
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

            $returnArr['upcomingevents'] = empty($eventsData) ? [] : $eventsData;

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Vennue Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function generateOrderForVennue($vennueId)
    {
        $returnArr = [];

        try
        {

            $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName', 'vennues.short_description as vennueShortDescription',
                'vennues.start_time as vennueStartTime', 'vennues.order_no as displayOrder',
                'vennues.is_express_deal as isExpressDeal', 'vennues.rating',
                'address.address_line_1 as AddressLine_1', 'address.address_line_2 as AddressLine_2', 'address.google_map_link as googleMapLink', 'cities.name as cityName',
                'pricings.actual_price as actualPrice', 'pricings.discount', 'pricing_type.name as pricingType', 'files.file_path as filePath')
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
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Vennue Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function vennueFilters()
    {
        $returnArr = [];

        try
        {

            $filterData = FilterHelper::getFilters('vennues');

            if (empty($filterData)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Filter Data does not exists ");

                return [];

            }

            foreach ($filterData as $key => $value) {

                $returnArr[$value['filter_type']][] = $value['filter'];

            }

            $vennueTypes = VennueTypes::select('vennue_types.name')
                ->join('vennue_type_mapping', 'vennue_type_mapping.venue_type_id', '=', 'vennue_types.id')
                ->where('vennue_types.status', 1)
                ->where('vennue_type_mapping.status', 1)
                ->distinct('vennue_types.name')
                ->get()
                ->toArray();

            $returnArr['vennue_types'] = empty($vennueTypes) ? [] : array_column($vennueTypes, 'name');

            $eventTypes = EventTypes::select('event_types.name')
                ->join('vennue_event_mapping', 'vennue_event_mapping.event_type_id', '=', 'event_types.id')
                ->where('vennue_event_mapping.status', 1)
                ->where('event_types.status', 1)
                ->distinct('event_types.name')
                ->get()
                ->toArray();

            $returnArr['event_types'] = empty($eventTypes) ? [] : array_column($eventTypes, 'name');

            $servicesTypes = ServicesTypes::select('services_types.name')
                ->join('services', 'services.service_type_id', '=', 'services_types.id')
                ->where('services.linkable_type', 'vennues')
                ->where('services_types.status', 1)
                ->where('services.status', 1)
                ->distinct('services_types.name')
                ->get()
                ->toArray();

            $returnArr['services_types'] = empty($servicesTypes) ? [] : array_column($servicesTypes, 'name');

            $ammentiesTypes = AmenitieTypes::select('amenitie_types.name')
                ->join('amenities', 'amenities.amenitie_type_id', '=', 'amenitie_types.id')
                ->where('amenities.linkable_type', 'vennues')
                ->where('amenitie_types.status', 1)
                ->where('amenities.status', 1)
                ->distinct('amenitie_types.name')
                ->get()
                ->toArray();

            $returnArr['ammenties_types'] = empty($ammentiesTypes) ? [] : array_column($ammentiesTypes, 'name');

            $roomTypes = RoomTypes::select('room_types.name')
                ->join('vennue_room_mapping', 'vennue_room_mapping.vennue_id', '=', 'room_types.id')
                ->where('vennue_room_mapping.status', 1)
                ->where('room_types.status', 1)
                ->distinct('room_types.name')
                ->get()
                ->toArray();

            $returnArr['room_types'] = empty($roomTypes) ? [] : array_column($roomTypes, 'name');

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Filter Data " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Filter Data", 1);

        }

    }

}
