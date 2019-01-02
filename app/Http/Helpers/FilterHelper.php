<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Filters;

class FilterHelper
{   
    /**
     * @param string  $linkableType
     *
     * @return Array
     *
     * @throws Exception
    */
    public static function getFilters( $linkableType )
    {   
        
        \DB::beginTransaction();

        try
        {   
             $filterData = Filters::select('filter_type', 'filter')
                                    ->where('linkable_type', $linkableType)
                                    ->where('status', 1)
                                    ->orderBy('order_no', 'asc')
                                    ->get()
                                    ->toArray();

              return $filterData;                      
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while fetch Filters".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching Filters", 1);

        }
       
    }

    
}
