<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Policies;


class PoliciesHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getPolicies( $linkableId, $linkableType )
    {   
        
        \DB::beginTransaction();

        try
        {   

            $policiyDetails = Policies::select('terms_header as termsHeader', 'terms as policyTerms', 'order_no')
                                    ->where('status', 1)
                                    ->where('linkable_id', $linkableId)
                                    ->where('linkable_type', $linkableType)
                                    ->orderBy('order_no', 'asc')
                                    ->get()
                                    ->toArray();

            return $policiyDetails;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Fetching policiy Details ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching policiy Details", 1);

        }
       
    }

    
}
