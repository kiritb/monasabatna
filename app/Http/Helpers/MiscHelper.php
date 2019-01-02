<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

class MiscHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function getPriceFilter( $priceArr )
    {   
        
       $returnArr = [];
        
       foreach ($priceArr as $key => $value) {
                    
            $splitTempArr = explode( '-', $value );
            
            foreach ($splitTempArr as $key => $value) {
                
                if( ! in_array($value, $returnArr) ){

                    array_push($returnArr,$value);
                }
            }
        }

        sort( $returnArr );

        return $returnArr;
                
    }

    
}
