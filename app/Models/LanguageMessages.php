<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * @property integer $id
 * @property string $language_key
 * @property integer $english_text
 * @property integer $arabic_text
 * @property integer $status
 
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class LanguageMessages extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'language_messages';

    /**
     * @var array
     */
    protected $fillable = [ 'language_key', 'english_text' , 'arabic_text', 'status','created_by', 'updated_by' ];



    public static function createLanguageMessages($data)
    {

        self::create ( 
            [
                'language_key'              => $data['language_key'],
                'english_text'              => $data['english_text'],
                'arabic_text'               => $data['arabic_text'],
                'status'                    => 1,
                'created_by'                => $data['email'],
                'updated_by'                => $data['email']
            ]
        );
    }

     /* Update the LanguageMessages based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateLanguageMessages($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
