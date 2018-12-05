<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Users;
use App\Models\Phones;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserHelper
{   
    /**
     * @param Array  $data
     *
     * @return Object
    */
    public static function registerUser( $data )
    {   
        
        \DB::beginTransaction();

        try
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Creating a new User ");

            $userObj = Users::create([
                'first_name'        => $data['first_name'],
                'fathers_name'      => $data['fathers_name'],
                'family_name'       => $data['family_name'],
                'email'             => $data['email'],
                'password'          => Hash::make($data['password']),
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]);
          
            Phones::create([
                    'linkable_id'   => $userObj->id, 
                    'linkable_type' => 'users', 
                    'country_code'  => $data['countryCode'], 
                    'phone_number'  => $data['phone'], 
                    'is_default'    => 1,
                    'created_by'    => $data['email'],
                    'updated_by'    => $data['email']
             ]);


            \DB::commit();

            return $userObj; 
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while creating a user ".print_r( $e->getMessage(), true) );

            \DB::rollBack();

            throw new \Exception(" Error while creating a user", 1);

        }
       
    }

    /**
     * @param Array  $data
     *
     * @return Array
    */
    public static function getUserByDefaultPhone( $phone )
    {   

        try
        {
             $phoneData = Phones::select('linkable_id')
                                ->where('phone_number', $phone )
                                ->where('is_default', 1 )
                                ->where('status', 1 )
                                ->get();
                                        

            if( empty($phoneData) )
            {

                \Log::info(__CLASS__." ".__FUNCTION__." Error Message Customer does not exists ");
                
                return [];
                
            }

            return $phoneData;
            
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured fetching  a user ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured fetching  a user ", 1);
        }
       
    }

    
}
