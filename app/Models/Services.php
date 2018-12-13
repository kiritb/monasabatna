<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer service_type_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Services extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services';

    /**
     * @var array
     */
    protected $fillable = ['service_type_id', 'linkable_id', 'linkable_type', 'order_no', 'status', 'created_by', 'updated_by' ];

}
