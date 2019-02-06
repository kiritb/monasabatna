<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $file_path
 * @property string $file_type
 * @property string $file_extension
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Files extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'files';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'file_path', 'file_type', 'file_extension', 'status', 'created_by', 'updated_by' ];


    public static function createFiles($data)
    {

        self::Create(
            [
                'linkable_id'       => $data['linkable_id'],
                'linkable_type'     => $data['linkable_type'],
                'file_path'         => $data['file_path'],
                'file_type'         => $data['file_type'],
                'file_extension'    => $data['file_extension'],
                'created_by'        => $data['email'],
                'updated_by'        => $data['email']
            ]
        );
    }

    /* Update the Files based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateFaqs($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
