<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property integer $event_type_id
 * @property string $short_description
 * @property datetime $start_time
 * @property datetime $end_time
 * @property integer $order_no
 * @property integer $language_id
 * @property string $is_express_deal
 * @property string $home_page_display
 * @property float $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Events extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'events';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name', 'short_description', 'start_time', 'end_time', 'order_no', 'language_id', 'is_express_deal', 'home_page_display', 'rating', 'fb_link', 'twitter_link',  'status','created_by', 'updated_by' ];

}
