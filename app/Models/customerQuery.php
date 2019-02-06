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


    public static function createCustomerQuery($data)
    {

        self::create ( 
            [
                'first_name'            => $data['first_name'],
                'fathers_name'          => isset( $data['fathers_name'] ) ? $data['fathers_name'] : NULL,
                'family_name'           => isset( $data['family_name'] ) ? $data['family_name'] : NULL,
                'email'                 => $data['email'],
                'country_code'          => isset($data['country_code']) ? $data['country_code'] : NULL,
                'phone_number'          => isset($data['phone_number'] ) ? $data['phone_number'] : NULL,
                'message'               => $data['message'],
                'status'                => 1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

     /* Update the Customer Query based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateCustomerQueryy($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
