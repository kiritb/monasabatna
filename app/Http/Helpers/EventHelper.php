<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Http\Constants\MiscConst;
use App\Http\Helpers\FilterHelper;
use App\Http\Helpers\MiscHelper;
use App\Http\Helpers\PackageHelper;
use App\Http\Helpers\PoliciesHelper;
use App\Http\Helpers\PrerequisitesHelper;
use App\Http\Helpers\ProvidersHelper;
use App\Http\Helpers\ReviewsHelper;
use App\Http\Helpers\ServicesHelper;
use App\Http\Helpers\AmmenitieHelper;
use App\Models\EventOrganisers;
use App\Models\Events;
use App\Models\EventTypes;
use App\Models\SupplierTypes;
use App\Models\SupplierProductTypes;
use App\Models\Suppliers;


class EventHelper
{
    /**
     *
     * @return Array
     */
    public static function eventListing($filterArr)
    {
        $returnArr = [];

        try
        {

            $eventsSql = Events::select('events.id as eventId','events.name as eventName', 'events.short_description as eventShortDescription', 'events.start_date as vennueStartTime',
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
                ->where('files.file_type', 'home_page_display')
                ->where('pricings.linkable_type', 'events')
                ->where('events.home_page_display', 1)
                ->where('events.start_date', '>', date('Y-m-d'))
                ->where('address.status', 1)
                ->where('events.status', 1)
                ->where('files.status', 1)
                ->where('pricings.status', 1)
                ->where('pricing_type.status', 1)
                ->where('cities.status', 1);

            if (isset($filterArr['price_range']) && !empty($filterArr['price_range'])) {
                $priceRange = $filterArr['price_range'];

                $priceArr = MiscHelper::getPriceFilter($priceRange);

                $minPrice = reset($priceArr);

                $maxPrice = end($priceArr);

                $eventsSql->whereBetween('pricings.actual_price', [$minPrice, $maxPrice]);

            }

            if (isset($filterArr['city']) && !empty($filterArr['city'])) {
                $eventsSql->whereIn('cities.name', $filterArr['city']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $eventsSql->whereIn('event_types.name', $filterArr['event_types']);

            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $eventsSql->join('orders', 'orders.linkable_id', '=', 'events.id')
                    ->where('orders.linkable_type', 'events')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $eventsSql->where('events.is_express_deal', 1);
            }

            if (isset($filterArr['sort']) && !empty($filterArr['sort'])) {
                if ($filterArr['sort'] == 'asc' || $filterArr['sort'] == 'desc') {
                    $eventsSql->orderBy('pricings.actual_price', $filterArr['sort']);
                }

            }

            $eventsData = $eventsSql->orderBy('events.order_no', 'asc')
                ->paginate(2);

            $eventsDataArr = $eventsData->toArray();

            if ($eventsDataArr['data'] == 0) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Vennue Data does not exists ");

                return [];

            }

            $eventsArr = $eventsDataArr['data'];

            unset($eventsDataArr['data']);

            $returnArr['upcomingEvents'] = $eventsArr;

            $returnArr['paginate'] = $eventsDataArr;

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Event Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Event Listings", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function upComingeventDetails($eventId)
    {
        $returnArr = [];


        try
        {

            $eventsDetails = current(Events::select(
                                                'events.id',
                                                'events.name as eventName', 
                                                'events.short_description as eventShortDescription', 
                                                'events.start_date as vennueStartTime',
                                                'events.end_date as eventEndTime', 
                                                'events.fb_link as fbLink', 
                                                'events.twitter_link as twitterLink',
                                                'events.rating',
                                                'events.start_date as startDate',
                                                'events.end_date as endDate',
                                                'events.booking_last_date as lastDateToBook',
                                                'address.address_line_1 as AddressLine_1', 
                                                'address.address_line_2 as AddressLine_2', 
                                                'address.google_map_link as googleMapLink',
                                                'cities.name as cityName',
                                                'vendors.vendor_name as vendorName',
                                                'vendors.license_no as licenseNo',
                                                'pricings.actual_price as actualPrice', 
                                                'pricings.discount',
                                                'pricing_type.name as pricingType',
                                                'event_types.name as eventType'

                                                )
                ->join('address', 'events.id', '=', 'address.linkable_id')
                ->join('pricings', 'events.id', '=', 'pricings.linkable_id')
                ->join('vendors', 'vendors.id', '=', 'events.vendor_id')
                ->join('event_types', 'event_types.id', '=', 'events.event_type_id')
                ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                ->join('cities', 'address.city_id', '=', 'cities.id')
                ->where('address.linkable_type', 'events')
                ->where('pricings.linkable_type', 'events')
                ->where('events.id',$eventId)
                ->where('address.status', 1)
                ->where('events.status', 1)
                 ->where('event_types.status', 1)
                ->where('pricings.status', 1)
                ->where('pricing_type.status', 1)
                ->where('cities.status', 1)
                ->get()
                ->toArray()
            );

            $fileData = FileHelper::getFiles([$eventId], 'events');

            $eventsDetails['files'] = empty($fileData) ? [] : $fileData;

             /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($eventId, 'events');

            $eventsDetails['policies'] = empty($policyData) ? [] : $policyData;

            $serviceData = ServicesHelper::getServices($eventId, 'events');

            $eventsDetails['services'] = empty($serviceData) ? [] : $serviceData;

            $ammentiesData = AmmenitieHelper::getAmmenties([$eventId], 'events');

            $eventsDetails['ammenties'] = empty($ammentiesData) ? [] : array_column($ammentiesData, 'amenitieName');

            return $eventsDetails;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Event Details " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Event Details", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function eventOrgainsersList($filterArr)
    {
        $returnArr = [];

        $todaysDate = date('Y-m-d h:i:s');

        try
        {

            $eventOrganisersSql = EventOrganisers::select('event_organisers.id as eventOrganisersId',
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
                ->where('cities.status', 1);

            if (isset($filterArr['city']) && !empty($filterArr['city'])) {
                $eventOrganisersSql->whereIn('cities.name', $filterArr['city']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $eventOrganisersSql->join('packages', 'packages.linkable_id', '=', 'event_organisers.id')
                    ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                    ->where('packages.linkable_type', 'event_organisers')
                    ->where('packages.status', 1)
                    ->where('event_types.status', 1)
                    ->whereIn('event_types.name', $filterArr['event_types']);

            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $todaysDate = $filterArr['from_date'];

                $eventOrganisersSql->join('orders', 'orders.linkable_id', '=', 'event_organisers.id')
                    ->where('orders.linkable_type', 'event_organisers')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $eventOrganisersSql->where('event_organisers.is_express_deal', 1);
            }

            if (isset($filterArr['rating']) && !empty($filterArr['rating'])) {
                if (strtolower($filterArr['rating']) == MiscConst::RATING_HIGH_TO_LOW) {
                    $eventOrganisersSql->orderBy('event_organisers.rating', 'desc');
                } else if (strtolower($filterArr['rating']) == MiscConst::RATING_LOW_TO_HIGH) {
                    $eventOrganisersSql->orderBy('event_organisers.rating', 'asc');
                }

            }

            $eventOrganisersArr = $eventOrganisersSql->orderBy('event_organisers.order_no', 'asc')
                ->paginate(2)
                ->toArray();

            if (empty($eventOrganisersArr['data'])) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Event Organisers Data does not exists ");

                return [];

            }

            $eventOrganisersIdArr = array_column($eventOrganisersArr['data'], 'eventOrganisersId');

            $eventCoversData = PackageHelper::getEventCovers($eventOrganisersIdArr, 'event_organisers');

            $eventCoversArr = [];

            $priceArr = [];

            foreach ($eventCoversData as $key => $value) {

                usort($value['price'], function ($a, $b) {
                    return $a['actualPrice'] <=> $b['actualPrice'];
                });

                $eventCoversArr[$key] = array_values(array_unique($value['event_covers']));

                $priceArr[$key] = $value['price'][0];
            }

            $eventArr = [];

            foreach ($eventOrganisersArr['data'] as $key => $value) {

                $value['event_covers'] = isset($eventCoversArr[$value['eventOrganisersId']]) ? $eventCoversArr[$value['eventOrganisersId']] : [];

                $value['price'] = isset($priceArr[$value['eventOrganisersId']]) ? $priceArr[$value['eventOrganisersId']] : [];

                $value['noOfPackages'] = count($value['event_covers']);

                array_push($eventArr, $value);

            }

            unset($eventOrganisersArr['data']);

            $returnArr['eventOrganiserslist'] = $eventArr;

            $returnArr['paginate'] = $eventOrganisersArr;

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Event Organisers Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Event Organisers Listings", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function getEventOrgainserDetails($id)
    {
        $returnArr = [];

        try
        {

            $eventOrganisersArr = current(EventOrganisers::select('event_organisers.id as eventOrganisersId',
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
                    ->toArray());

            if (empty($eventOrganisersArr)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Event Organisers Data does not exists ");

                return [];

            }


            $eventCoversData = PackageHelper::getEventCovers([$id], 'event_organisers');

            $packgagesData = $eventCoversData[$id]['packages'];
            
            $eventOrganisersArr['noOfPackages']     = count($packgagesData);
            
            $eventOrganisersArr['travelNote']       = $packgagesData[0]['travelNote'];
            
            $eventOrganisersArr['setUpTime']        = $packgagesData[0]['setUpTime'];

            $packagesArr = [];

            /* fetch files */

            $fileData = FileHelper::getFiles([$id], 'event_organisers');

            $eventOrganisersArr['files'] = empty($fileData) ? [] : $fileData;

            /* fetch themes */

            foreach ($packgagesData as $key => $value) {
                $packagesArr['all'][] = [
                    'packageId'   => $value['packageId'],  
                    'packageName' => $value['name'],
                    'actualPrice' => $value['actualPrice'],
                    'filePath'    => $value['filePath'],
                    'pricingType' => $value['pricingType'],
                ];

                $packagesArr[$value['eventTypes']][] = [
                    'packageId'   => $value['packageId'],
                    'packageName' => $value['name'],
                    'actualPrice' => $value['actualPrice'],
                    'filePath'    => $value['filePath'],
                    'pricingType' => $value['pricingType'],
                ];

            }

            $eventOrganisersArr['packages'] = $packagesArr;

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($id, 'event_organisers');

            $eventOrganisersArr['policies'] = empty($policyData) ? [] : $policyData;

            return $eventOrganisersArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Event Organisers Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Event Organisers Listings", 1);

        }

    }

    /**
     *
     * @return Array
    */
    public static function getPackageDetails($id)
    {
        $returnArr = [];

        try
        {
            $packageDetails = current(PackageHelper::getPackageDetails($id, 'event_organisers'));

            /* fetch files */

            $fileData = FileHelper::getFiles([$id], 'packages');

            $packageDetails['files'] = empty($fileData) ? [] : $fileData;

            /* get prerequisites */

            $prerequisites = PrerequisitesHelper::getPrerequisites($id, 'packages');

            $packageDetails['prerequisites'] = empty($prerequisites) ? [] : array_column($prerequisites, 'prerequisites');

            /* get prerequisites */
            $providers = ProvidersHelper::getPackageProviders($id, 'packages');

            $packageDetails['providers'] = empty($providers) ? [] : array_column($providers, 'provider_desc');

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($id, 'packages');

            $packageDetails['policies'] = empty($policyData) ? [] : $policyData;

            /* Fetch Reviews for themese */

            $reviewData = ReviewsHelper::getReviews($id, 'packages');

            $packageDetails['reviews'] = empty($reviewData) ? [] : $reviewData;

            return $packageDetails;
            
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching packages Details " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching packages Details", 1);

        }

    }

    /**
     *
     * @return Array
     */
    public static function getEventFilters()
    {
        $returnArr = [];

        try
        {

            $filterData = FilterHelper::getFilters('events');

            if (empty($filterData)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Filter Data does not exists ");

                return [];

            }

            foreach ($filterData as $key => $value) {

                $returnArr[$value['filter_type']][] = $value['filter'];

            }

            $eventTypes = EventTypes::select('event_types.name')
                ->join('events', 'events.event_type_id', '=', 'event_types.id')
                ->where('event_types.status', 1)
                ->where('events.status', 1)
                ->distinct('event_types.name')
                ->get()
                ->toArray();

            $returnArr['event_types'] = empty($eventTypes) ? [] : array_column($eventTypes, 'name');

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Filter Data " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Filter Data", 1);

        }
    }

    /**
     *
     * @return Array
     */
    public static function getEventOrganinsersFilters()
    {
        $returnArr = [];

        try
        {

            $filterData = FilterHelper::getFilters('event_organisers');

            if (empty($filterData)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Filter Data does not exists ");

                return [];

            }

            foreach ($filterData as $key => $value) {

                $returnArr[$value['filter_type']][] = $value['filter'];

            }

            $eventTypes = EventTypes::select('event_types.name')
                ->join('events', 'events.event_type_id', '=', 'event_types.id')
                ->where('event_types.status', 1)
                ->where('events.status', 1)
                ->distinct('event_types.name')
                ->get()
                ->toArray();

            $returnArr['event_types'] = empty($eventTypes) ? [] : array_column($eventTypes, 'name');

            return $returnArr;
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Filter Data " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Filter Data", 1);

        }
    }

     /**
     *
     * @return Array
     */
    public static function getSuppliersFilters()
    {
        $returnArr = [];

        try
        {

            $filterData = FilterHelper::getFilters('suppliers');

            if (empty($filterData)) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Filter Data does not exists ");

                return [];

            }

            foreach ($filterData as $key => $value) {

                $returnArr[$value['filter_type']][] = $value['filter'];

            }

            $eventTypes = EventTypes::select('event_types.name')
                ->join('packages', 'packages.event_type_id', '=', 'event_types.id')
                ->join('suppliers', 'suppliers.id', '=', 'packages.linkable_id')
                ->where('packages.linkable_type', 'suppliers')
                ->where('event_types.status', 1)
                ->where('packages.status', 1)
                ->distinct('event_types.name')
                ->get()
                ->toArray();

            $returnArr['event_types'] = empty($eventTypes) ? [] : array_column($eventTypes, 'name');


            $supplierTypes                  = SupplierTypes::select('name')
                                                            ->where('status', 1)
                                                            ->get()
                                                            ->toArray();
            
            $returnArr['supplier_types']    = empty($supplierTypes) ? [] : array_column($supplierTypes, 'name');


            $supplierItems                  = SupplierProductTypes::select('supplier_product_types.name')
                                                            ->join('supplier_product_mapping', 'supplier_product_mapping.supplier_product_id', '=', 'supplier_product_types.id')
                                                            ->join('packages', 'packages.id', '=', 'supplier_product_mapping.package_id')
                                                            ->join('suppliers', 'suppliers.id', '=', 'packages.linkable_id')
                                                            ->where('packages.linkable_type', 'suppliers')
                                                            ->where('supplier_product_types.status', 1)
                                                            ->where('packages.status', 1)
                                                            ->where('suppliers.status', 1)
                                                            ->where('supplier_product_mapping.status', 1)
                                                            ->distinct('supplier_product_types.name')
                                                            ->get()
                                                            ->toArray();
            
            $returnArr['items']    = empty($supplierItems) ? [] : array_column($supplierItems, 'name');
            
                                            
            return $returnArr;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Filter Data " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Filter Data", 1);

        }
    }

    /**
     *
     * @return Array
    */
    public static function getSuppliersList($filterArr)
    {
        $returnArr = [];

        $todaysDate = date('Y-m-d h:i:s');

        try
        {

            $supplierSql = Suppliers::select(   'suppliers.id as supplierId',
                                                'suppliers.name as supplierName',
                                                'suppliers.short_description as supplierDescription',
                                                'suppliers.order_no as displayOrder',
                                                'suppliers.rating',
                                                'suppliers.twitter_link as twitterLink',
                                                'suppliers.fb_link as fbLink',
                                                'address.address_line_1 as AddressLine_1',
                                                'address.address_line_2 as AddressLine_2',
                                                'address.google_map_link as googleMapLink',
                                                'cities.name as cityName',
                                                'files.file_path as filePath'
                                            )
                ->join('address', 'suppliers.id', '=', 'address.linkable_id')
                ->join('cities', 'address.city_id', '=', 'cities.id')
                ->join('files', 'suppliers.id', '=', 'files.linkable_id')
                ->where('address.linkable_type', 'suppliers')
                ->where('files.linkable_type', 'suppliers')
                ->where('files.file_type', 'home_page_display')
                ->where('address.status', 1)
                ->where('suppliers.status', 1)
                ->where('files.status', 1)
                ->where('address.status', 1)
                ->where('cities.status', 1);

            if (isset($filterArr['city']) && !empty($filterArr['city'])) {
                $supplierSql->whereIn('cities.name', $filterArr['city']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $supplierSql->join('packages', 'packages.linkable_id', '=', 'suppliers.id')
                    ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                    ->where('packages.linkable_type', 'suppliers')
                    ->where('packages.status', 1)
                    ->where('event_types.status', 1)
                    ->whereIn('event_types.name', $filterArr['event_types']);

            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $todaysDate = $filterArr['from_date'];

                $supplierSql->join('orders', 'orders.linkable_id', '=', 'suppliers.id')
                    ->where('orders.linkable_type', 'suppliers')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $supplierSql->where('suppliers.is_express_deal', 1);
            }

            if (isset($filterArr['rating']) && !empty($filterArr['rating'])) {
                if (strtolower($filterArr['rating']) == MiscConst::RATING_HIGH_TO_LOW) {
                    $supplierSql->orderBy('suppliers.rating', 'desc');
                } else if (strtolower($filterArr['rating']) == MiscConst::RATING_LOW_TO_HIGH) {
                    $supplierSql->orderBy('suppliers.rating', 'asc');
                }

            }

            $suppliersDetails = $supplierSql->orderBy('suppliers.order_no', 'asc')
                ->paginate(2);
            
            $suppliersArr = $suppliersDetails->toArray();

            if (empty($suppliersArr['data']) ) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Suppliers  Data does not exists ");

                return [];

            }

            $suppliersIdArr = array_column($suppliersArr['data'], 'supplierId');

            $eventCoversData = PackageHelper::getEventCovers($suppliersIdArr, 'suppliers');

            $eventCoversArr = [];

            $priceArr = [];

            $packageId = '';

            foreach ($eventCoversData as $key => $value) {

                usort($value['price'], function ($a, $b) {
                    return $a['actualPrice'] <=> $b['actualPrice'];
                });

                $eventCoversArr[$key] = array_values(array_unique($value['event_covers']));

                $priceArr[$key] = $value['price'][0];

                $packageId      = $value['packages'][0]['eventOrganiserId'];
            }

            
            $eventArr = [];

            foreach ($suppliersArr['data'] as $key => $value) {

                $value['event_covers']          = isset($eventCoversArr[$value['supplierId']]) ? $eventCoversArr[$value['supplierId']] : [];

                $value['price']                 = isset($priceArr[$value['supplierId']]) ? $priceArr[$value['supplierId']] : [];

                $value['noOfPackages']          = count($value['event_covers']);

                $supplierItems                  = SupplierProductTypes::select('supplier_product_types.name')
                                                            ->join('supplier_product_mapping', 'supplier_product_mapping.supplier_product_id', '=', 'supplier_product_types.id')
                                                            ->join('packages', 'packages.id', '=', 'supplier_product_mapping.package_id')
                                                            ->join('suppliers', 'suppliers.id', '=', 'packages.linkable_id')
                                                            ->where('packages.linkable_type', 'suppliers')
                                                            ->where('supplier_product_mapping.status', 1)
                                                            ->where('packages.linkable_type', 'suppliers')
                                                            ->where('suppliers.id', $value['supplierId'])
                                                            ->where('packages.status', 1)
                                                            ->where('suppliers.status', 1)
                                                            ->where('supplier_product_mapping.status', 1)
                                                            ->distinct('supplier_product_types.name')
                                                            ->get()
                                                            ->toArray();

                $value['items'] = array_column($supplierItems, 'name');

                array_push($eventArr, $value);

            }

            
            

            unset($suppliersArr['data']);


            

            $returnArr['suppliersList'] = $eventArr;

            $returnArr['paginate'] = $suppliersArr;

            return $returnArr;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Supplier Organisers Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Supplier Organisers Listings", 1);

        }

    }

    /**
     *
     * @return Array
    */
    public static function getSupplierDetails( $id )
    {
        $returnArr = [];

        $todaysDate = date('Y-m-d h:i:s');

        try
        {

            $supplierDetailsArr = current(Suppliers::select(   'suppliers.id as supplierId',
                                                'suppliers.name as supplierName',
                                                'suppliers.short_description as supplierDescription',
                                                'suppliers.order_no as displayOrder',
                                                'suppliers.rating',
                                                'suppliers.twitter_link as twitterLink',
                                                'suppliers.fb_link as fbLink',
                                                'address.address_line_1 as AddressLine_1',
                                                'address.address_line_2 as AddressLine_2',
                                                'address.google_map_link as googleMapLink',
                                                'cities.name as cityName',
                                                'vendors.vendor_name as vendorName',
                                                'vendors.license_no as licenseNo'
                                            )
                ->join('address', 'suppliers.id', '=', 'address.linkable_id')
                ->join('cities', 'address.city_id', '=', 'cities.id')
                 ->join('vendors', 'vendors.id', '=', 'suppliers.vendor_id')
                ->where('address.linkable_type', 'suppliers')
                ->where('address.status', 1)
                ->where('suppliers.status', 1)
                ->where('cities.status', 1)
                ->where('suppliers.id', $id)
                ->orderBy('suppliers.order_no', 'asc')
                ->get()
                ->toArray()
            );
            
            $supplierCoversData = PackageHelper::getEventCovers([$id], 'suppliers');

            $packgagesData = $supplierCoversData[$id]['packages'];
            
            $supplierDetailsArr['noOfPackages']     = count($packgagesData);
            
            $supplierDetailsArr['travelNote']       = $packgagesData[0]['travelNote'];
            
            $supplierDetailsArr['setUpTime']        = $packgagesData[0]['setUpTime'];

            $packagesArr = [];

            /* fetch files */

            $fileData = FileHelper::getFiles([$id], 'suppliers');

            $supplierDetailsArr['files'] = empty($fileData) ? [] : $fileData;

            /* fetch themes */

            foreach ($packgagesData as $key => $value) {
                $packagesArr['all'][] = [
                    'packageId'   => $value['packageId'],  
                    'packageName' => $value['name'],
                    'actualPrice' => $value['actualPrice'],
                    'filePath'    => $value['filePath'],
                    'pricingType' => $value['pricingType'],
                ];

                $packagesArr[$value['eventTypes']][] = [
                    'packageId'   => $value['packageId'],  
                    'packageName' => $value['name'],
                    'actualPrice' => $value['actualPrice'],
                    'filePath'    => $value['filePath'],
                    'pricingType' => $value['pricingType'],
                ];

            }

            $supplierDetailsArr['packages'] = $packagesArr;

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($id, 'suppliers');

            $supplierDetailsArr['policies'] = empty($policyData) ? [] : $policyData;
           
           return $supplierDetailsArr;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Suplier Details " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Supplier Details", 1);

        }

    }

    /**
     *
     * @return Array
    */
    public static function getSupplierPackageDetails($id)
    {
        $returnArr = [];

        try
        {
            $packageDetails = current(PackageHelper::getPackageDetails($id, 'suppliers'));

            /* fetch files */

            $fileData = FileHelper::getFiles([$id], 'packages');

            $packageDetails['files'] = empty($fileData) ? [] : $fileData;

            $supplierItems                  = SupplierProductTypes::select('supplier_product_types.name')
                                                            ->join('supplier_product_mapping', 'supplier_product_mapping.supplier_product_id', '=', 'supplier_product_types.id')
                                                            ->join('packages', 'packages.id', '=', 'supplier_product_mapping.package_id')
                                                            ->where('packages.linkable_type', 'suppliers')
                                                            ->where('supplier_product_mapping.status', 1)
                                                            ->where('packages.linkable_type', 'suppliers')
                                                            ->where('packages.id', $id)
                                                            ->where('packages.status', 1)
                                                            ->where('supplier_product_mapping.status', 1)
                                                            ->get()
                                                            ->toArray();

            $packageDetails['items']        = array_column($supplierItems, 'name');

            /* get prerequisites */

            $prerequisites = PrerequisitesHelper::getPrerequisites($id, 'packages');

            $packageDetails['prerequisites'] = empty($prerequisites) ? [] : array_column($prerequisites, 'prerequisites');

            /* get prerequisites */
            $providers = ProvidersHelper::getPackageProviders($id, 'packages');

            $packageDetails['providers'] = empty($providers) ? [] : array_column($providers, 'provider_desc');

            /* get policy temrs and conditions */

            $policyData = PoliciesHelper::getPolicies($id, 'packages');

            $packageDetails['policies'] = empty($policyData) ? [] : $policyData;

            /* Fetch Reviews for themese */

            $reviewData = ReviewsHelper::getReviews($id, 'packages');

            $packageDetails['reviews'] = empty($reviewData) ? [] : $reviewData;

            return $packageDetails;
            
        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching packages Details " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching packages Details", 1);

        }

    }

    public static function getPackageSupplierList($filterArr)
    {
        $returnArr = [];

        $todaysDate = date('Y-m-d h:i:s');

        try
        {

            $supplierSql = Suppliers::select(   'suppliers.id as supplierId',
                                                'suppliers.name as supplierName',
                                                'packages.id as pacakgeId',
                                                'packages.name as pacakgeName',
                                                'packages.short_description as packageDescription',
                                                'suppliers.rating',
                                                'files.file_path as filePath',
                                                'pricings.actual_price as actualPrice',
                                                'pricings.discount',
                                                'pricing_type.name as pricingType',
                                                'event_types.name as eventType'
                                            )
                ->join('packages', 'packages.linkable_id', '=', 'suppliers.id')
                ->join('files', 'files.linkable_id', '=', 'packages.id')
                ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                ->join('pricings', 'pricings.linkable_id', '=', 'packages.id')
                ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                ->where('packages.linkable_type', 'suppliers')
                ->where('files.linkable_type', 'packages')
                ->where('pricings.linkable_type', 'packages')
                ->where('files.file_type', 'home_page_display')
                ->where('suppliers.status', 1)
                ->where('pricings.status', 1)
                ->where('files.status', 1)
                ->where('event_types.status', 1)
                ->where('packages.status', 1);

            if (isset($filterArr['city']) && !empty($filterArr['city'])) {
                $supplierSql->join('address', 'suppliers.id', '=', 'address.linkable_id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'suppliers')
                            ->where('address.status', 1)
                            ->whereIn('cities.name', $filterArr['city']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $supplierSql->whereIn('event_types.name', $filterArr['event_types']);
            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $todaysDate = $filterArr['from_date'];

                $supplierSql->join('orders', 'orders.linkable_id', '=', 'suppliers.id')
                    ->where('orders.linkable_type', 'suppliers')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $supplierSql->where('suppliers.is_express_deal', 1);
            }

            if (isset($filterArr['rating']) && !empty($filterArr['rating'])) {
                if (strtolower($filterArr['rating']) == MiscConst::RATING_HIGH_TO_LOW) {
                    $supplierSql->orderBy('suppliers.rating', 'desc');
                } else if (strtolower($filterArr['rating']) == MiscConst::RATING_LOW_TO_HIGH) {
                    $supplierSql->orderBy('suppliers.rating', 'asc');
                }

            }

            $suppliersDetails = $supplierSql->orderBy('suppliers.order_no', 'asc')
                                            ->orderBy('suppliers.created_at', 'asc')
                                            ->paginate(2);
            
            $suppliersArr = $suppliersDetails->toArray();

            if (empty($suppliersArr['data']) ) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Suppliers  Data does not exists ");

                return [];

            }
            

            $returnArr['suppliersList'] = $suppliersArr['data'];

            unset($suppliersArr['data']);

            $returnArr['paginate'] = $suppliersArr;

            return $returnArr;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Package Supplier Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Package Supplier Listings", 1);

        }

    }


    public static function getPackageEventOrganisersList($filterArr)
    {
        $returnArr = [];

        $todaysDate = date('Y-m-d h:i:s');

        try
        {

            $eventOrganinserSql = EventOrganisers::select( 
                                                        'event_organisers.id as eventOrganisersId',
                                                        'event_organisers.name as eventOrgainsersName',
                                                        'packages.id as pacakgeId',
                                                        'packages.name as pacakgeName',
                                                        'packages.short_description as packageDescription',
                                                        'event_organisers.rating',
                                                        'files.file_path as filePath',
                                                        'pricings.actual_price as actualPrice',
                                                        'pricings.discount',
                                                        'pricing_type.name as pricingType',
                                                        'event_types.name as eventType'
                                            )
                ->join('packages', 'packages.linkable_id', '=', 'event_organisers.id')
                ->join('files', 'files.linkable_id', '=', 'packages.id')
                ->join('event_types', 'event_types.id', '=', 'packages.event_type_id')
                ->join('pricings', 'pricings.linkable_id', '=', 'packages.id')
                ->join('pricing_type', 'pricings.pricing_type_id', '=', 'pricing_type.id')
                ->where('packages.linkable_type', 'event_organisers')
                ->where('files.linkable_type', 'packages')
                ->where('pricings.linkable_type', 'packages')
                ->where('files.file_type', 'home_page_display')
                ->where('event_organisers.status', 1)
                ->where('pricings.status', 1)
                ->where('files.status', 1)
                ->where('event_types.status', 1)
                ->where('packages.status', 1);

            if (isset($filterArr['city']) && !empty($filterArr['city'])) {
                $eventOrganinserSql->join('address', 'event_organisers.id', '=', 'address.linkable_id')
                            ->join('cities', 'address.city_id', '=', 'cities.id')
                            ->where('address.linkable_type', 'suppliers')
                            ->where('address.status', 1)
                            ->whereIn('cities.name', $filterArr['city']);

            }

            if (isset($filterArr['event_types']) && !empty($filterArr['event_types'])) {
                $eventOrganinserSql->whereIn('event_types.name', $filterArr['event_types']);
            }

            if (isset($filterArr['from_date']) && isset($filterArr['to_date'])) {

                $todaysDate = $filterArr['from_date'];

                $eventOrganinserSql->join('orders', 'orders.linkable_id', '=', 'suppliers.id')
                    ->where('orders.linkable_type', 'event_organisers')
                    ->whereNotBetween('orders.booking_from_date', [$filterArr['from_date'], $filterArr['to_date']])
                    ->whereNotBetween('orders.booking_to_date', [$filterArr['to_date'], $filterArr['from_date']]);

            }

            if (isset($filterArr['is_express_deal']) && ($filterArr['is_express_deal'])) {

                $eventOrganinserSql->where('event_organisers.is_express_deal', 1);
            }

            if (isset($filterArr['rating']) && !empty($filterArr['rating'])) {
                if (strtolower($filterArr['rating']) == MiscConst::RATING_HIGH_TO_LOW) {
                    $eventOrganinserSql->orderBy('event_organisers.rating', 'desc');
                } else if (strtolower($filterArr['rating']) == MiscConst::RATING_LOW_TO_HIGH) {
                    $eventOrganinserSql->orderBy('event_organisers.rating', 'asc');
                }

            }

            $eventOrganinsersDetails = $eventOrganinserSql->orderBy('event_organisers.order_no', 'asc')
                                            ->orderBy('event_organisers.created_at', 'asc')
                                            ->paginate(2);
            
            $eventOrganinsersArr = $eventOrganinsersDetails->toArray();

            if (empty($eventOrganinsersArr['data']) ) {
                \Log::info(__CLASS__ . " " . __FUNCTION__ . " Event organinsers Data does not exists ");

                return [];

            }
            

            $returnArr['eventOrganiserslist'] = $eventOrganinsersArr['data'];

            unset($eventOrganinsersArr['data']);

            $returnArr['paginate'] = $eventOrganinsersArr;

            return $returnArr;

        } catch (\Exception $e) {
            \Log::info(__CLASS__ . " " . __FUNCTION__ . " Exception Occured while Fetching Package Event organinsers Listings " . print_r($e->getMessage(), true));

            throw new \Exception(" Exception Occured while Fetching Package Event organinsers Listings", 1);

        }

    }


}
