<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $theme_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class EventThemeMappings extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_theme_mappings';

    /**
     * @var array
     */
    protected $fillable = ['theme_id', 'linkable_id', 'linkable_type', 'order_no', 'status','created_by', 'updated_by' ];

}
