<?php

/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */
 namespace App\Http\Helpers;

 use App\Models\FacilitateCustomerService;

class FacilitateCustomerHelper
{   
    /**
     * @param Array  $data
     *
     * @return boolean
     *
     * @throws Exception
    */
    public static function FacilitateCustomerService( $data )
    {   
        
        try
        {   
             FacilitateCustomerService::create([
                'country_code'          => $data['country_code'],
                'phone_number'          => $data['phone_number'],
                'email'                 => $data['email'],
                'event_date'            => $data['event_date'],
                'event_type'            => $data['event_type'],
                'no_of_guests'          => isset( $data['no_of_guests'] ) ? $data['no_of_guests'] : NULL ,
                'food_type'             => isset( $data['food_type'] ) ? $data['food_type'] : NULL,
                'decoration_type'       => isset( $data['decoration_type'] ) ? $data['decoration_type'] : NULL,
                'budget'                => isset( $data['budget'] ) ? $data['budget'] : NULL,
                'note'                  => isset( $data['note'] ) ? $data['note'] : NULL,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]);

            return True;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Creating Facilitate Customer Service ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Creating Facilitate Customer Service ", 1);

        }
       
    }

    
}
