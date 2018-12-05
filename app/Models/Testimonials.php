<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $testimonial
 * @property integer $is_approved
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Testimonials extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'testimonial', 'is_approved', 'status' , 'created_by', 'updated_by' ];

}
