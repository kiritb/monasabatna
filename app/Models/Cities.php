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
class Cities extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cities';

    /**
     * @var array
     */
    protected $fillable = [ 'name', 'status','created_by', 'updated_by' ];



    public static function createCity($data)
    {

        self::create ( 
            [
                'name'              => $data['name'],
                'status'            => 1,
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

     /* Update the Cities based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateCity($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
