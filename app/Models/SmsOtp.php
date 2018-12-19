<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




/**
 * @property integer $id
 * @property integer $user_id
 * @property integer otp
 * @property string $sms_text
 * @property string $sms_sent
 * @property string $terms
 * @property date $expiry_date
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class SmsOtp extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sms_otp';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'otp', 'sms_text', 'sms_sent', 'expiry_date' , 'status', 'created_by', 'updated_by' ];

}
