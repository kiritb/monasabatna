<?php

/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */
 namespace App\Http\Helpers;

 use App\Models\GenericTerms;
 

class GenericTermsHelper
{   
    /**
     * @param Array  $data
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function getTermsData(  )
    {   
        
        try
        {   
             $resArr = [];

             $res = GenericTerms::select('type', 'terms_header', 'terms_text')
                         ->where('status',1)
                         ->get()
                         ->toArray();

            if(!empty($res))
            {
                foreach ($res as $key => $value) 
                {
                    $resArr[$value['type']][] = ['termsHeader' => $value['terms_header'] , 'termsText' => $value['terms_text']];
                }
            }    

            return $resArr;         
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while fetching Terms data  ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while fetching Terms data ", 1);

        }
       
    }

    
}
