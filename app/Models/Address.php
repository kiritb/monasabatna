<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $google_map_link
 * @property integer $city_id
 * @property integer $country_id
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Address extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'address';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'address_line_1', 'address_line_2', 'google_map_link', 'city_id', 'country_id', 'status','created_by', 'updated_by' ];

}
