<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property integer $pricing_type_id
 * @property float $price
 * @property float $discount
 * @property float $actual_price
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Pricings extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pricings';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'pricing_type_id', 'price', 'discount', 'actual_price', 'status', 'created_by', 'updated_by' ];


    public static function createPricings($data)
    {

        self::Create(
            [   
                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'pricing_type_id'       => $data['pricing_type_id'],
                'payment_type_id'       => $data['payment_type_id'],
                'price'                 => $data['price'],
                'discount'              => isset( $data['discount'] ) ? $data['discount'] : 0.0,
                'actual_price'          => $data['actual_price'],
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Pricings based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updatePricings($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
