<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class VennueTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vennue_types';

    /**
     * @var array
     */
    protected $fillable = [ 'name', 'short_description', 'order_no', 'status','created_by', 'updated_by' ];


    public static function createVennueTypes($data)
    {

        self::Create(
            [   
                'name'           => $data['name'],
                'short_description'    => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'order_no'       => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'     => $data['email'],
                'updated_by'     => $data['email']
            ]
        );
    }

    /* Update the VennueTypes based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateVennueTypes($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
