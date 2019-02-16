<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $terms_header
 * @property string $terms
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Policies extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'policies';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'terms_header', 'terms' ,'order_no', 'status', 'created_by', 'updated_by' ];


    public static function createPolicies($data)
    {

        self::Create(
            [   

                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'terms_header'          => $data['terms_header'],
                'terms'                 => $data['terms'],
                'order_no'              => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Policies based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updatePolicies($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    // get policy based on vendor id
    public static function getPolicy($vendor_id=""){
        return self::where('linkable_id', $vendor_id)
                    ->where('linkable_type', 'vennues')
                    ->orderBy('id', 'DESC')
                    ->first();
    }
}
