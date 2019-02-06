<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer service_type_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Services extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services';

    /**
     * @var array
     */
    protected $fillable = ['service_type_id', 'linkable_id', 'linkable_type', 'order_no', 'status', 'created_by', 'updated_by' ];


    public static function createServices($data)
    {

        self::Create(
            [   
                'service_type_id'   => $data['service_type_id'],
                'linkable_id'       => $data['linkable_id'],
                'linkable_type'     => $data['linkable_type'],
                'order_no'          => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

    /* Update the Services based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateServices($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
