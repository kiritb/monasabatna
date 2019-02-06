<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $heading
 * @property string $blog
 * @property integer $order_no
 * @property integer $is_approved
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Blogs extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'blogs';

    /**
     * @var array
     */
    protected $fillable = [ 'user_id', 'heading', 'blog','order_no', 'is_approved', 'status', 'created_by', 'updated_by' ];



    public static function createBlog($data)
    {

        self::create ( 
            [
                'user_id'           => $data['user_id'],
                'heading'           => $data['heading'],
                'blog'              => $data['blog'],
                'order_no'          => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'is_approved'       => isset( $data['is_approved'] ) ? $data['is_approved'] : 0,
                'status'            => 1,
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

     /* Update the Blogs based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateBlog($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
