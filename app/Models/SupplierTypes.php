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
class SupplierTypes extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'supplier_types';

    /**
     * @var array
     */
    protected $fillable = ['name','status','created_by', 'updated_by' ];

    public static function createSupplierTypes($data)
    {

        self::Create(
            [   
                'name'          => $data['name'],
                'created_by'    => $data['email'],
                'updated_by'    => $data['email']
            ]
        );
    }

    /* Update the SupplierTypes based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateSupplierTypes($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
