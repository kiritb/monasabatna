<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer user_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $rating
 * @property integer $is_approved
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Reviews extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'reviews';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'linkable_id', 'linkable_type', 'rating', 'is_approved', 'status', 'created_by', 'updated_by' ];

}
