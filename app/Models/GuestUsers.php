<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property string $user_email
 * @property string $first_name
 * @property string $fathers_name
 * @property string $family_name
 * @property string $country_code
 * @property string $phone_no
 * @property string $customer_address
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class GuestUsers extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'guest_users';

    /**
     * @var array
    */
    protected $fillable = ['user_email','first_name','fathers_name','family_name','country_code','phone_no', 'guest_first_name', 'guest_fathers_name', 'guest_family_name', 'guest_email', 'guest_country_code', 'guest_phone_no', 'status', 'created_by', 'updated_by' ];

}
