<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Prerequisites;


class PrerequisitesHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getPrerequisites( $linkableId, $linkableType )
    {   
        
        try
        {   
            $prerequisitesData = Prerequisites::select('prerequisite_text as prerequisites')
                                    ->where('status', 1)
                                    ->where('linkable_id', $linkableId)
                                    ->where('linkable_type', $linkableType)
                                    ->orderBy('order_no', 'asc')
                                    ->get()
                                    ->toArray();

            return $prerequisitesData;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching prerequisites data ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching prerequisites data", 1);

        }
       
    }

    
}
