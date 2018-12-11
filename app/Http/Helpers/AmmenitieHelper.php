<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Amenities;
use App\Models\AmenitieTypes;

class AmmenitieHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getAmmenties( $linkableIdArr, $linkableType )
    {   
        
        \DB::beginTransaction();

        try
        {   
            $ammentiesDetails = Amenities::select('amenities.linkable_id as vennueId', 'amenitie_types.name as amenitieName', 'amenities.order_no as amenitieDisplayOrder')
                                            ->join('amenitie_types', 'amenitie_types.id', '=', 'amenities.amenitie_type_id')
                                            ->where('amenities.linkable_type', $linkableType)
                                            ->where('amenitie_types.status', 1)
                                            ->where('amenities.status', 1)
                                            ->whereIn('amenities.linkable_id', $linkableIdArr)
                                            ->orderBy('amenities.order_no', 'asc')
                                            ->get()
                                            ->toArray();

            return $ammentiesDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while creating a user ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while creating a user", 1);

        }
       
    }

    
}
