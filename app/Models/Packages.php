<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property integer event_type_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $name
 * @property string $short_description
 * @property string $set_up_time
 * @property string $note
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Packages extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'packages';

    /**
     * @var array
     */
    protected $fillable = ['event_type_id', 'linkable_id', 'linkable_type', 'name', 'short_description', 'set_up_time', 'note', 'order_no', 'status','created_by', 'updated_by' ];

}
