<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $supplier_type_id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property string $long_description
 * @property integer $order_no
 * @property integer $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $is_express_deal
 * @property integer $prior_intimation_days
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at

 */
class Suppliers extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'suppliers';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'supplier_type_id', 'name', 'short_description', 'long_description', 'order_no', 'rating', 'fb_link', 'twitter_link', 'is_express_deal',
       'prior_intimation_days', 'status', 'created_by', 'updated_by'];

}
