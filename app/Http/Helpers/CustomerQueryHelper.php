<?php

/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */
 namespace App\Http\Helpers;

 use App\Models\customerQuery;

class CustomerQueryHelper
{   
    /**
     * @param Array  $data
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function createCustomerQuery( $data )
    {   
        
        try
        {   
             customerQuery::create([
                'first_name'        => $data['first_name'],
                'fathers_name'      => isset( $data['fathers_name'] ) ? $data['fathers_name'] : NULL,
                'family_name'       => isset( $data['family_name'] ) ? $data['family_name'] : NULL,
                'email'             => $data['email'],
				'country_code'      => isset( $data['country_code'] ) ? $data['country_code'] : NULL,
				'phone_number'      => isset( $data['phone_number'] ) ? $data['phone_number'] : NULL,
				'message'     		=> $data['message'],
				'created_by'      	=> $data['email'],
				'updated_by'      	=> $data['email']
            ]);

            return True;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Creating Query ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Creating Query ", 1);

        }
       
    }

    
}
