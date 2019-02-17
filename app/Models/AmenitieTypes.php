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
    protected $fillable = ['name', 'short_description', 'status','created_by', 'updated_by' ];


    public static function createAmenitieTypes( $data)
    {
        self::create(
            [
                'name'                  => $data['linkable_id'],
                'short_description'     => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'status'                => 1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]

        );
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
     public static function getAmenitieTypesDetails($amentie_id){
        return self::where('id', $amentie_id)
                ->where('status', 1)
                ->get();

    }
}
