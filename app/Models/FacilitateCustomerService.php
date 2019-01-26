<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $country_code
 * @property integer $phone_number
 * @property string $email
 * @property datetime $event_date
 * @property integer $no_of_guests
 * @property string $food_type
 * @property string $decoration_type
 * @property string $budget
 * @property string $note
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */

class FacilitateCustomerService extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilitate_customer_service';

    /**
     * @var array
     */
    protected $fillable = ['name', 'country_code', 'phone_number', 'email', 'event_date', 'event_type', 'no_of_guests', 'food_type', 'decoration_type', 'budget', 'note',
        'status', 'created_by', 'updated_by'];

}
