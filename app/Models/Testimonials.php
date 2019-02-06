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


    public static function createTestimonials($data)
    {

        self::Create(
            [   
                'user_id'           => $data['user_id'],
                'testimonial'       => $data['testimonial'],
                'is_approved'       => isset( $data['is_approved'] ) ? $data['is_approved'] : 0,
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

    /* Update the Testimonials based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateTestimonials($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
