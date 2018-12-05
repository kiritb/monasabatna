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

}
