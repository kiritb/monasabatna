<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $terms_header
 * @property string $terms
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Policies extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'policies';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'terms_header', 'terms' ,'order_no', 'status', 'created_by', 'updated_by' ];

}
