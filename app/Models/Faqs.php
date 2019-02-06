<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $question
 * @property string $filter
 * @property integer $order_no
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Faqs extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'faq';

    /**
     * @var array
     */
    protected $fillable = [ 'linkable_id', 'linkable_type', 'question', 'answer' ,'order_no', 'status','created_by', 'updated_by' ];


    public static function createFaqs($data)
    {

        self::create([
                'linkable_id'           =>$data['linkable_id'],
                'linkable_type'         =>$data['linkable_type'],
                'question'              =>$data['question'],
                'answer'                =>$data['answer'],
                'order_no'              =>isset( $data['order_no'] ) ? $data['order_no'] : NULL ,
                'status'                =>1,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]);
    }

    /* Update the Faqs based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateFaqs($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
