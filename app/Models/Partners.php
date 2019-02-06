<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $order_no
 * @property integer $home_page_display
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Partners extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'partners';

    /**
     * @var array
     */
    protected $fillable = ['name', 'order_no', 'home_page_display', 'status', 'created_by', 'updated_by' ];


    public static function createPartners($data)
    {

        self::Create(
            [   

                'name'                  => $data['name'],
                'home_page_display'     => isset( $data['home_page_display'] ) ? $data['home_page_display'] : 0,
                'order_no'              => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Partners based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updatePartners($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
