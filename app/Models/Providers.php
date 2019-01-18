<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $provider_desc
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Providers extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'providers';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'provider_desc', 'order_no', 'status', 'created_by', 'updated_by' ];

}
