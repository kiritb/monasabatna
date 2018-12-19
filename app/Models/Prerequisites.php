<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $prerequisite_text
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Prerequisites extends Model
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
    protected $fillable = ['linkable_id', 'linkable_type' ,'prerequisite_text', 'order_no', 'status', 'created_by', 'updated_by' ];

}
