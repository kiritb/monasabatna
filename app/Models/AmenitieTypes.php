<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class AmenitieTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'amenitie_types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'short_description'];


    public static function createAmenitieTypes( $data)
    {
        $result = self::create(
            [
                'name'                  => $data['name'],
                'short_description'     => isset( $data['description'] ) ? $data['description'] : NULL,
                'status'                => 1,
                'created_by'            => 'haritha@brillmi9ndz.com',
                'updated_by'            => 'haritha@brillmi9ndz.com'
            ]

        );
        return $result;
    }


    /* Update the AmenitieTypes based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateAmenitieTypes($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    public static function getAmenitieTypes(){
        return self::where('status', 1)
                ->get();
    }
}
