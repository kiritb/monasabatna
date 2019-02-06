<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $amenitie_type_id
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Amenities extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'amenities';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'amenitie_type_id', 'order_no', 'status','created_by', 'updated_by' ];


    public static function createAmenties( $data)
    {
        self::create(
            [
                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'amenitie_type_id'      => $data['amenitie_type_id'],
                'address_line_2'        => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'status'                => 1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]

        );
    }


    /* Update the Amenities based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateAmenities($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
