<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ServicesTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services_types';

   /**
     * @var array
     */
    protected $fillable = [ 'name', 'short_description', 'status','created_by', 'updated_by' ];

}
