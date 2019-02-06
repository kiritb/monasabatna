<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer service_id
 * @property string $name
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ServiceMenu extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services_menu';

    /**
     * @var array
     */
    protected $fillable = ['service_id', 'name', 'order_no', 'status', 'created_by', 'updated_by' ];


    public static function createServiceMenu($data)
    {

        self::Create(
            [   
                'service_id'     => $data['service_id'],
                'name'           => $data['name'],
                'order_no'       => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'     => $data['email'],
                'updated_by'     => $data['email']
            ]
        );
    }

    /* Update the ServiceMenu based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateServiceMenu($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
