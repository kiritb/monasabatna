<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property integer $order_no
 * @property float $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class EventOrganisers extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_organisers';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name', 'short_description', 'order_no', 'home_page_display', 'rating', 'fb_link', 'twitter_link',  'status','created_by', 'updated_by' ];

}
