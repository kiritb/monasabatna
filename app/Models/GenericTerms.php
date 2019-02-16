<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type
 * @property string $terms_header
 * @property integer $terms_text
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class GenericTerms extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'generic_terms';

    /**
     * @var array
     */
    protected $fillable = ['type', 'terms_header', 'terms_text', 'status','created_by', 'updated_by' ];


    public static function createGenericTerms( $data)
    {
        self::create(
            [
                'type'                  => $data['type'],
                'terms_header'          => $data['terms_header'],
                'terms_text'            => $data['terms_text'],
                'status'                => 1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]

        );
    }


    /* Update the Update Generic Terms based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateGenericTerms($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
