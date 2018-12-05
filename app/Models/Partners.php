<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $order_no
 * @property integer $home_page_display
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Partners extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'partners';

    /**
     * @var array
     */
    protected $fillable = ['name', 'order_no', 'home_page_display', 'status', 'created_by', 'updated_by' ];

}
