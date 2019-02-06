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
use App\Models\SmsOtp;
use App\Models\Address;
use App\Models\Files;



use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\Http\Helpers\SmsOtpHelper;
use App\Http\Constants\SmsTypeConst;


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


            $digits         = env('SMS_OTP_NO_DIGITS', 4);
            
            $otp            = rand( pow(10, $digits-1), pow(10, $digits)-1 );

            $otpType        = SmsTypeConst::SMS_TYPE_ACCOUNT_VERIFICATION;
            
            $validityMins   = env('SMS_OTP_NO_DIGITS', 20);

            $otpValidity    = date("Y-m-d H:i:s", strtotime("+$validityMins minutes") );


            $smsText        = 'please use the otp to authenticate and approve your account '.$otp.' and would be valid for next '.$validityMins;


            SmsOtpHelper::createOtp($userObj->id, $otp, $otpType, $smsText, $otpValidity, $data['email']);

            \DB::commit();


            $userObj->otp           = $otp;

            $userObj->smsText       = $smsText;

            $userObj->otpValidity   = $otpValidity;


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


    /**
     * @param integer  $otp
     * @param integer  $userId
     *
     * @return boolean
    */
    public static function verifyotp( $otp, $userId )
    {   

        try
        {   

             $currentDate   = date("Y-m-d H:i:s");

             \Log::info(__CLASS__." ".__FUNCTION__." currentDate ".$currentDate);

             $otpData       = current( SmsOtp::select('sms_otp.id')
                                        ->join('users', 'users.id', '=', 'sms_otp.user_id')
                                        ->where('sms_otp.user_id', $userId )
                                        ->where('sms_otp.otp', $otp )
                                        ->whereNull('users.account_verified_at')
                                        ->where('sms_otp.expiry_date', '>=',$currentDate )
                                        ->where('sms_otp.status', 1 )
                                        ->where('users.status', 1 )
                                        ->get()
                                        ->toArray()
                               );
                                        
            
            if( empty($otpData) )
            {

                \Log::info(__CLASS__." ".__FUNCTION__." Invalid Otp ");
                
                return false;
                
            }

            \Log::info(__CLASS__." ".__FUNCTION__." Verifying account ");

            Users::where('id', $userId)->update( ['account_verified_at' =>$currentDate ] );

            return true;
            
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured Verifying Otp ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured Verifying Otp ", 1);
        }
       
    }

    /**
     * @param integer  $userId
     *
     * @return Array
     *
     * @throws Exception
    */
    public static function resendotp( $userId )
    {   

        try
        {   
            $userDetails = current (Users::select('email')
                                      ->where('id',$userId)
                                      ->where('status', 1)
                                      ->get()
                                      ->toArray()
                            );

            if( empty($userDetails) )
            {
                return [];
            }

            $digits         = env('SMS_OTP_NO_DIGITS', 4);
            
            $otp            = rand( pow(10, $digits-1), pow(10, $digits)-1 );

            $otpType        = SmsTypeConst::SMS_TYPE_ACCOUNT_VERIFICATION;

            $validityMins   = env('SMS_OTP_NO_DIGITS', 20);

            $otpValidity    = date("Y-m-d H:i:s", strtotime("+$validityMins minutes") );

            $smsText        = 'please use the otp to authenticate and approve your account '.$otp.' and would be valid for next '.$validityMins;

            $otpData = SmsOtpHelper::createOtp($userId, $otp, $otpType, $smsText, $otpValidity,$userDetails['email'], true );

            return $otpData->toArray();
            
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while re-sending Otp ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured fetching  a user ", 1);
        }
       
    }


     /**
     * @param integer  $userId
     *
     * @return Array
     *
     * @throws Exception
    */
    public static function sendOtp( $userId, $phone, $smsType, $smsText )
    {   

        try
        {   

            $userDetails = current (Users::select('email')
                                      ->where('id',$userId)
                                      ->where('status', 1)
                                      ->get()
                                      ->toArray()
                            );

            if( empty($userDetails) )
            {
                return [];
            }

            $digits         = env('SMS_OTP_NO_DIGITS', 4);
            
            $otp            = rand( pow(10, $digits-1), pow(10, $digits)-1 );

            $otpType        = $smsType;

            $validityMins   = env('SMS_OTP_VALIDAITY_TIME', 20);

            $otpValidity    = date("Y-m-d H:i:s", strtotime("+$validityMins minutes") );

            $smsText        = str_replace( [ '~SMS_OTP~', '~VALIDITY~'], [$otp, $otpValidity], $smsText );

            $otpData = SmsOtpHelper::createOtp($userId, $otp, $otpType, $smsText, $otpValidity,$userDetails['email'], true );

            return $otpData->toArray();
            
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while re-sending Otp ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured fetching  a user ", 1);
        }
       
    }


    /**
     * @param integer  $userId
     *
     * @return Array
     *
    */
    public static function emailByUserId($userId)
    {
        $userDetails = current (Users::select('email')
                                      ->where('users.id',$userId)
                                      ->where('users.status', 1)
                                      ->get()
                                      ->toArray()
                        );

        return $userDetails;
    }


    /**
     * @param integer  $userId
     *
     * @return Array
     *
    */
    public static function getUserDetails($userId)
    {
        $userDetails = current (Users::select('first_name','fathers_name','family_name','email','marital_status','gender','dob')
                                      ->where('users.id',$userId)
                                      ->where('users.status', 1)
                                      ->get()
                                      ->toArray()
                        );

        if(!empty($userDetails))
        {
            $phoneData          = Phones::select('country_code','phone_number','is_default','is_landline')
                                        ->where('linkable_id', $userId )
                                        ->where('linkable_type', 'users' )
                                        ->where('status', 1 )
                                        ->get()
                                        ->toArray();

            $addressData         = Address::select('address_line_1','address_line_2','google_map_link','cities.name')
                                        ->join('cities', 'address.city_id', '=', 'cities.id')
                                        ->where('linkable_id', $userId )
                                        ->where('linkable_type', 'users' )
                                        ->where('address.status', 1 )
                                        ->get()
                                        ->toArray();

            $imageData          =   Current(Files::select('file_path')
                                        ->where('linkable_id', $userId )
                                        ->where('linkable_type', 'users')
                                        ->where('file_type', 'user_image')
                                        ->where('status', 1 )
                                        ->get()
                                        ->toArray()
                                    );

            $userDetails['address']           = $addressData;

            $userDetails['phones']            = $phoneData;

            $userDetails['profile_image']     = $imageData['file_path'];

            return $userDetails;
        }
        
        return [];
    }

    /**
     * update User
     * @param integer  $userId
     *
     * @param Array $data
     *
     * @return Boolean
     *
     * @throws Exception
    */
    public static function updateUser($userId,$data)
    {
        try
        {
            Users::where('id', $userId)->update( $data );

            return TRUE;
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Updating User ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception while updating User ", 1);
        }
        
    }


    /**
     * Validate Password
     * @param integer  $userId
     *
     * @return Boolean
     *
     * @throws Exception
    */
     public static function validatePassword($userId,$password)
    {
        try
        {
            $userDetails = Current( Users::select('password')->where('id', $userId)->where('status', 1)->get()->toArray() );
            
            if(empty($userDetails))
            {
                return false;        
            }
            
            if( Hash::check($password, $userDetails['password'] ) )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(\Exception $e)
        {
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Validatiing Password ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while Validatiing Password ", 1);
        }
        
    }


    
    /**
     * @param integer  $otp
     * @param integer  $userId
     *
     * @return boolean
    */
    public static function validateOtp( $otp, $userId, $type )
    {   

        try
        {   

             $currentDate   = date("Y-m-d H:i:s");

             \Log::info(__CLASS__." ".__FUNCTION__." currentDate ".$currentDate);

             $otpData       = current( SmsOtp::select('sms_otp.id','expiry_date')
                                        ->join('users', 'users.id', '=', 'sms_otp.user_id')
                                        ->where('sms_otp.user_id', $userId )
                                        ->where('sms_otp.otp', $otp )
                                        ->where('sms_otp.otp_type', $type)
                                        ->where('sms_otp.status', 1 )
                                        ->where('users.status', 1 )
                                        ->get()
                                        ->toArray()
                               );
                                        
            if( empty($otpData) )
            {

                \Log::info(__CLASS__." ".__FUNCTION__." Invalid Otp ");
                
                return false;
                
            }

            return true;
            
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured Validating OTP ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured Validating OTP ", 1);
        }
       
    }
    
}
