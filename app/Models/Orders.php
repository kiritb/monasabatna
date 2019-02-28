<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_email
 * @property integer $is_guest_user
 * @property string $order_no
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $voucher_id
 * @property integer $pricing_type_id
 * @property integer $payment_type_id
 * @property double $voucher_amount
 * @property double $total_amount
 * @property double $discounted_amount
 * @property double $net_total
 * @property double $tax_amount
 * @property double $tax_percent
 * @property double $service_fee
 * @property double $service_percent
 * @property date $booking_from_date
 * @property date $booking_to_date
 * @property integer $is_payment_done 
 * @property integer $is_partial_payment
 * @property float $partial_amount
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
    protected $table = 'orders';

    /**
     * @var array
    */
    protected $fillable = ['user_email', 'is_guest_user', 'order_no','linkable_id','linkable_type','voucher_id','pricing_type_id','payment_type_id','voucher_amount','total_amount','discounted_amount','net_total','tax_amount','tax_percent','service_fee','service_percent','booking_from_date','booking_to_date','is_payment_done', 'is_partial_payment', 'partial_amount', 'status', 'created_by', 'updated_by' ];

}
