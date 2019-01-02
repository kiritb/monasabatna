<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class EventTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_types';

    /**
     * @var array
     */
    protected $fillable = [ 'name', 'status','created_by', 'updated_by' ];

}
