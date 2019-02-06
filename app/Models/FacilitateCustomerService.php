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


     
    public static function createFacilitateCustomerService($data)
    {

        self::create([
                'name'                  => $data['name'],
                'country_code'          => $data['country_code'],
                'phone_number'          => $data['phone_number'],
                'email'                 => $data['email'],
                'event_date'            => $data['event_date'],
                'event_type'            => $data['event_type'],
                'no_of_guests'          => isset( $data['no_of_guests'] ) ? $data['no_of_guests'] : NULL ,
                'food_type'             => isset( $data['food_type'] ) ? $data['food_type'] : NULL,
                'decoration_type'       => isset( $data['decoration_type'] ) ? $data['decoration_type'] : NULL,
                'budget'                => isset( $data['budget'] ) ? $data['budget'] : NULL,
                'note'                  => isset( $data['note'] ) ? $data['note'] : NULL,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]);
    }

     /* Update the FacilitateCustomerService based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateFacilitateCustomerService($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
    
}
