<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\ThemeProviders;


class ThemeProvidersHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getThemeProviders( $themeId )
    {   
        
        try
        {   
            $themeProviderData = ThemeProviders::select('provider_desc')
                                        ->where('status', 1)
                                        ->where('theme_id', $themeId)
                                        ->orderBy('order_no', 'asc')
                                        ->get()
                                        ->toArray();

            return $themeProviderData;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching theme Provider Data ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching theme Provider Data", 1);

        }
       
    }

    
}
