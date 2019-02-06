<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $supplier_type_id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property string $long_description
 * @property integer $order_no
 * @property integer $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $is_express_deal
 * @property integer $prior_intimation_days
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at

 */
class Suppliers extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'suppliers';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'supplier_type_id', 'name', 'short_description', 'long_description', 'order_no', 'rating', 'fb_link', 'twitter_link', 'is_express_deal',
       'prior_intimation_days', 'status', 'created_by', 'updated_by'];


    public static function createSuppliers($data)
    {

        self::Create(
            [   
                'vendor_id'                 => $data['vendor_id'],
                'supplier_type_id'          => $data['supplier_type_id'],
                'name'                      => $data['name'],
                'short_description'         => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'long_description'          => isset( $data['long_description'] ) ? $data['long_description'] : NULL,
                'order_no'                  => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'rating'                    => isset( $data['rating'] ) ? $data['rating'] : 0.0,
                'fb_link'                   => isset( $data['fb_link'] ) ? $data['fb_link'] : NULL,
                'twitter_link'              => isset( $data['twitter_link'] ) ? $data['twitter_link'] : NULL,
                'is_express_deal'           => isset( $data['is_express_deal'] ) ? $data['is_express_deal'] : 0,
                'prior_intimation_days'     => $data['prior_intimation_days'],
                'created_by'                => $data['email'],
                'updated_by'                => $data['email']
            ]
        );
    }

    /* Update the Suppliers based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateSuppliers($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
