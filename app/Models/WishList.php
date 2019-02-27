<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $user_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property date $from_date
 * @property date $to_date
 * @property string comment
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class WishList extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wish_list';

    /**
     * @var array
     */
    protected $fillable = [ 'user_id', 'linkable_id', 'linkable_type','from_date', 'to_date', 'comment','status', 'created_by', 'updated_by' ];



    public static function createWishList($data)
    {

        self::create ( 
            [
                'user_id'               => $data['user_id'],
                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'from_date'             => $data['from_date'] ,
                'to_date'               => $data['to_date'],
                'comment'               => isset( $data['comment'] ) ? $data['comment'] : NULL,
                'status'                => 1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

     /* Update the WishList based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateWishList($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
