<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property string $user_email
 * @property string $guest_first_name
 * @property string $guest_fathers_name
 * @property string $guest_family_name
 * @property string $guest_email
 * @property string $guest_country_code
 * @property string $guest_phone_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class guestBehalfBookings extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'guest_behalf_bookings';

    /**
     * @var array
    */
    protected $fillable = ['user_email', 'guest_first_name', 'guest_fathers_name', 'guest_family_name', 'guest_email', 'guest_country_code', 'guest_phone_no', 'status', 'created_by', 'updated_by' ];

}
