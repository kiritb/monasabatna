<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $package_id
 * @property integer $supplier_product_id
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class SupplierProductMappings extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'supplier_product_mapping';

    /**
     * @var array
     */
    protected $fillable = ['package_id', 'supplier_product_id', 'order_no', 'status','created_by', 'updated_by' ];


    public static function createSupplierProductMappings($data)
    {

        self::Create(
            [   
                'package_id'                    => $data['package_id'],
                'supplier_product_id'           => $data['supplier_product_id'] ,
                'order_no'                      => isset( $data['order_no'] ) ? $data['order_no'] : NULL ,
                'created_by'                    => $data['email'],
                'updated_by'                    => $data['email']
            ]
        );
    }

    /* Update the SupplierProductMappings based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateSupplierProductMappings($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
