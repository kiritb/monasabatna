<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property string $long_description
 * @property integer $min_guest_cap
 * @property integer $max_guest_cap
 * @property datetime $start_time
 * @property datetime $end_time
 * @property integer $transacton_count
 * @property integer $order_no
 * @property integer $language_id
 * @property integer $is_express_deal
 * @property string $fb_link
 * @property string $twitter_link
 * @property float $rating
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Vennues extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vennues';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name', 'short_description', 'long_description', 'points', 'min_guest_cap', 'max_guest_cap', 'start_time', 'end_time', 'transacton_count', 'order_no', 'language_id', 'is_express_deal', 'fb_link', 'twitter_link', 'rating', 'status','created_by', 'updated_by' ];

}
