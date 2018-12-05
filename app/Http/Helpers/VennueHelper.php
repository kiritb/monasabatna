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
 
            $ammentiesData =    Amenities::select('amenities.linkable_id as vennueId', 'amenitie_types.name as amenitieName', 'amenities.order_no as amenitieDisplayOrder')
                                            ->join('amenitie_types', 'amenitie_types.id', '=', 'amenities.amenitie_type_id')
                                            ->where('amenities.linkable_type', 'vennues')
                                            ->where('amenitie_types.status', 1)
                                            ->where('amenities.status', 1)
                                            ->whereIn('amenities.linkable_id', $vennueIdArr)
                                            ->orderBy('amenities.order_no', 'asc')
                                            ->get()
                                            ->toArray();

            $ammentiesDataArr = [];

            foreach ($ammentiesData as $key => $value) 
            {
                $ammentiesDataArr[$value['vennueId']][] = $value['amenitieName']; 
            }
            
            $vennuesArr = [];

            foreach ($venneDataArr['data'] as $key => $value) {
                
                $value['ammenties'] = isset( $ammentiesDataArr[$value['vennueId'] ] ) ? $ammentiesDataArr[$value['vennueId']] : [];
                
                array_push($vennuesArr,$value);

            }

            $returnArr['vennueLists'] = $vennuesArr;
            
            return $returnArr;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching Vennue Listings ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Fetching Vennue Listings", 1);

        }
       
    }

    
}
