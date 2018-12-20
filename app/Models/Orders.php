<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_id
 * @property string $order_no
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $voucher_id
 * @property integer $pricing_type_id
 * @property integer $payment_type_id
 * @property double $voucher_amount
 * @property double $totalAmount
 * @property double $discountedAmount
 * @property double $netTotal
 * @property double $taxAmount
 * @property double $taxPercent
 * @property double $serviceFee
 * @property double $servicePercent
 * @property date $booking_from_date
 * @property date $booking_to_date
 * @property integer $is_payment_done 
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Orders extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prerequisites';

    /**
     * @var array
    */
    protected $fillable = ['user_id','order_no','linkable_id','linkable_type','voucher_id','pricing_type_id','payment_type_id','voucher_amount','totalAmount','discountedAmount','netTotal','taxAmount','taxPercent','serviceFee','servicePercent','booking_from_date','booking_to_date','is_payment_done', 'status', 'created_by', 'updated_by' ];

}
