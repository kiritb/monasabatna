<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Providers;


class ProvidersHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getPackageProviders( $packageId, $linkableType )
    {   
        
        try
        {   
            $packageProviderData = Providers::select('provider_desc')
                                        ->where('status', 1)
                                        ->where('linkable_id', $packageId)
                                        ->where('linkable_type', $linkableType)
                                        ->orderBy('order_no', 'asc')
                                        ->get()
                                        ->toArray();

            return $packageProviderData;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching package Provider Data ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching package Provider Data", 1);

        }
       
    }

    
}
