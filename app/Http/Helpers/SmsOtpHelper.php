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
    public static function createOtp( $userId, $otp, $otpType, $smsText, $otpValidity, $createdBy, $isResendFlag = false )
    {   
        try
        {   
            if( $isResendFlag )
            {
                SmsOtp::where('user_id', $userId)->where('otp_type', $otpType)->update( ['status' => 0 , 'updated_by' => $createdBy ] );
            }

            $otpObj = SmsOtp::create([
                        'user_id'       => $userId, 
                        'otp'           => $otp, 
                        'otp_type'      => $otpType,
                        'sms_text'      => $smsText, 
                        'sms_sent'      => 0, 
                        'expiry_date'   => $otpValidity,
                        'created_by'    => $createdBy,
                        'updated_by'    => $createdBy
             ]);


            return $otpObj;
        }
        catch( \Exception $e)
        {   
            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while Creating Otp ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Error while Fetching Creating Otp", 1);

        }
       
    }
    
}
