<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $amenitie_type_id
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Amenities extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'amenities';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'amenitie_type_id', 'order_no', 'status','created_by', 'updated_by' ];

}
