<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $theme_id
 * @property string $provider_desc
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ThemeProviders extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'theme_providers';

    /**
     * @var array
     */
    protected $fillable = ['theme_id', 'provider_desc', 'order_no', 'status', 'created_by', 'updated_by' ];

}
