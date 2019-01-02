<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $name
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class RoomTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'room_types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'order_no', 'status','created_by', 'updated_by' ];

}
