<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\SmsOtp;
use App\Http\Constants\SmsTypeConst;
use App\Http\Helpers\Curl;

class SmsOtpHelper
{   
    /**
     * @param integer $userId
     * @param integer $otp
     * @param integer $otpType
     * @param integer $smsText
     * @param integer $otpValidity
     * @param integer $createdBy
     * @param integer $isResendFlag
     *
     * @return Object
    */
    public static function createOtp( $userId, $otp, $otpType, $smsText, $otpValidity, $createdBy, $phoneNo, $isResendFlag = false )
    {   
        try
        {   
            if( $isResendFlag )
            {
                SmsOtp::where('user_id', $userId)->where('otp_type', $otpType)->update( ['status' => 0 , 'updated_by' => $createdBy ] );
            }

            if( self::sendSms($phoneNo, $smsText) )
            {
                $otpObj = SmsOtp::create([
                        'user_id'       => $userId, 
                        'otp'           => $otp, 
                        'otp_type'      => $otpType,
                        'sms_text'      => $smsText, 
                        'sms_sent'      => 1, 
                        'expiry_date'   => $otpValidity,
                        'created_by'    => $createdBy,
                        'updated_by'    => $createdBy
             ]);

                $otpArr = $otpObj->toArray();

                return [ 'user_id'=>$otpArr['user_id'], 'otp_type' => $otpArr['otp_type'] ];    
            }
            else
            {
              throw new \Exception(" Error while sending sms", 1);   
            }
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Creating Otp ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Creating Otp", 1);

        }
       
    }
    
    /** 
    * Send Sms
    *
    * @param $phoneNo
    *
    * @param $phoneNo
    *
    * @return boolean 
    */
    public static function sendSms($phoneNo, $message)
    {
        $smsUrl = env('SMS_URL');

        $params = ['user' => env('SMS_USER'), 'pass' => env('SMS_PASS'), 'to'=>$phoneNo, 'message'=> $message, 'sender' => env('SMS_SENDER') ];

        try
        {
            $res = Curl::makeCurlCall('GET', $params, $smsUrl);
            

            if (strpos($res, 'STATUS: Success') !== false) {
                    
                    return true;
            }

            return false;
        }
        catch(\ Exception $e)
        {
             \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Creating Otp ".print_r( $e->getMessage(), true) );
            
             return false;   
        }

    }
}
