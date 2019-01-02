<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $linkable_type
 * @property string $filter_type
 * @property string $filter
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Filters extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'filters';

    /**
     * @var array
     */
    protected $fillable = [ 'linkable_type', 'filter_type', 'filter' ,'order_no', 'status','created_by', 'updated_by' ];

}
