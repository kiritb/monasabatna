<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $linkable_type
 * @property string $filter_type
 * @property string $filter
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Filters extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'filters';

    /**
     * @var array
     */
    protected $fillable = [ 'linkable_type', 'filter_type', 'filter' ,'order_no', 'status','created_by', 'updated_by' ];


    public static function createFilters($data)
    {

        self::Create(
            [
                'linkable_type'     => $data['linkable_type'],
                'filter_type'       => $data['filter_type'],
                'filter'            => $data['filter'],
                'order_no'          => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

    /* Update the Filters based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateFilters($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
