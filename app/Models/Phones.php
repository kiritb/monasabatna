<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $country_code
 * @property string $phone_number
 * @property string $is_landline
 * @property integer $status
 * @property string $created_by
 * @property string $updated_by
 */
class Phones extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'phones';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'country_code', 'phone_number', 'is_default', 'is_landline', 'status', 'created_by', 'updated_by' ];


    public static function createPhones($data)
    {

        self::Create(
            [   

                'linkable_id'           => $data['linkable_id'],
                'linkable_type'         => $data['linkable_type'],
                'country_code'          => $data['country_code'],
                'phone_number'          => $data['phone_number'],
                'is_default'            => $data['is_default'],
                'is_landline'           => isset( $data['is_landline'] ) ? $data['is_landline'] : 0,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Phones based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updatePhones($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
