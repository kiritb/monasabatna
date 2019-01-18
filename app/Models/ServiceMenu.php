<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer service_id
 * @property string $name
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ServiceMenu extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services_menu';

    /**
     * @var array
     */
    protected $fillable = ['service_id', 'name', 'order_no', 'status', 'created_by', 'updated_by' ];

}
