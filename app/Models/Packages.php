<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property integer event_type_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $name
 * @property string $short_description
 * @property string $set_up_time
 * @property string $note
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Packages extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'packages';

    /**
     * @var array
     */
    protected $fillable = ['event_type_id', 'linkable_id', 'linkable_type', 'name', 'short_description', 'set_up_time', 'note', 'order_no', 'status','created_by', 'updated_by' ];


    public static function createPackages($data)
    {

        self::Create(
            [
                'event_type_id'         => $data['event_type_id'],
                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'name'                  => $data['name'],
                'short_description'     => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'set_up_time'           => $data['set_up_time'],
                'note'                  => isset( $data['note'] ) ? $data['note'] : NULL,
                'order_no'              => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Packages based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updatePackages($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
