<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $supplier_id
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
    protected $fillable = ['supplier_id', 'supplier_product_id', 'order_no', 'status','created_by', 'updated_by' ];

}
