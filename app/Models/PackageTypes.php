<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_type_id
 * @property string $name
 * @property string $short_description
 * @property string $set_up_time
 * @property string $note
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class PackageTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'package_types';

    /**
     * @var array
     */
    protected $fillable = ['event_type_id', 'name', 'short_description', 'set_up_time', 'note' ,'status' , 'created_by', 'updated_by' ];

}
