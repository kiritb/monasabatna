<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ServicesTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'services_types';

   /**
     * @var array
     */
    protected $fillable = [ 'name', 'short_description', 'status','created_by', 'updated_by' ];


    public static function createServicesTypes($data)
    {

        self::Create(
            [   
                'name'                          => $data['name'],
                'short_description'             => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'created_by'                    => $data['email'],
                'updated_by'                    => $data['email']
            ]
        );
    }

    /* Update the ServicesTypes based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateServicesTypes($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
