<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $first_name
 * @property string $fathers_name
 * @property string $family_name
 * @property string $email
 * @property string $country_code
 * @property string $phone_number
 * @property string $message
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */

class customerQuery extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'customer_query';

    /**
     * @var array
     */
    protected $fillable = [ 'first_name', 'fathers_name', 'family_name', 'email', 'country_code', 'phone_number', 'message' ,'status','created_by', 'updated_by' ];

}
