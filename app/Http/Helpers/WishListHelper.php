<?php

/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */
 namespace App\Http\Helpers;

 use App\Models\Suppliers;
 use App\Models\Vennues;
 use App\Models\WishList;

class WishListHelper
{   
    /**
     * @param Array  $data
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function addWishList( $data )
    {   
        
        try
        {   
             WishList::createWishList($data);

        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while adding wish list ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Creating adding wish list ", 1);

        }
       
    }

    public static function validateVennue($id)
    {
        $vennueData = Vennues::select('id')
                        ->where('id', $id)
                        ->where('status', 1)
                        ->get()
                        ->toArray();

        if(empty($vennueData))
        {
            return false;
        }

        return true;

    }

    public static function validateSuppliers($packageId)
    {
        $supplierData = Suppliers::select('suppliers.id as id')
                                    ->join('packages', 'packages.linkable_id', '=', 'suppliers.id')
                                    ->where('packages.linkable_type', 'suppliers')
                                    ->where('packages.id', $packageId)
                                    ->where('packages.status',1)
                                    ->where('suppliers.status',1)
                                    ->get()
                                    ->toArray();

         if(empty($supplierData))
        {
            return false;
        }

        return true;       

    }


    public static function getWishList($type, $email)
    {   

        $resArr   = [];


        $wishListData = WishList::select('linkable_id', 'linkable_type', 'from_date', 'to_date', 'comment')
                                 ->where('linkable_type', $type )
                                 ->where('email', $email)
                                 ->where('status',1)
                                 ->get()
                                 ->toArray();

         if( !empty($wishListData) ) 
         {  
            $idArr  = array_column($wishListData, 'linkable_id');

            if($type == 'vennues')
            {
                $resArr =  self::getWishListVenueData($idArr);
            }
            else
            {
                $resArr = self::getWishListSuppliersData($idArr);
            }
         }  

         return $resArr;                     
    }


    public static function getWishListVenueData($vennueIdArr)
    {

        $vennueData = Vennues::select('vennues.id as vennueId', 'vennues.name as vennueName', 'vennues.short_description as vennueShortDescription',
                'vennues.start_time as vennueStartTime', 'vennues.order_no as displayOrder', 'vennues.min_guest_cap as MinGuestCap', 'vennues.max_guest_cap as MaxGuestCap',
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
                ->where('cities.status', 1)
                ->whereIn('vennues.id', $vennueIdArr)
                ->orderBy('vennues.order_no', 'asc')
                ->orderBy('vennues.created_at', 'desc')
                ->get()
                ->toArray();

         return $vennueData;   
    }

    public static function getWishListSuppliersData($packageIdArr)
    {

       $suppliersPackageData = Suppliers::select('suppliers.id as supplierId',
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
                                ->whereIn('packages.id', $packageIdArr)
                                ->where('event_types.status', 1)
                                ->where('packages.status', 1)
                                ->orderBy('suppliers.order_no', 'asc')
                                ->orderBy('suppliers.created_at', 'desc')
                                ->get()
                                ->toArray();


         return $suppliersPackageData;   
    }
}
