<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer user_id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property float $rating
 * @property float $rating_responsiveness
 * @property float $rating_quality
 * @property float $rating_availability
 * @property float $rating_value_for_money
 * @property integer $is_approved
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Reviews extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'reviews';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'linkable_id', 'linkable_type', 'rating', 'rating_responsiveness',
                           'rating_quality','rating_availability','rating_value_for_money',
                           'is_approved', 'status', 'created_by', 'updated_by' ];


    public static function createReviews($data)
    {

        self::Create(
            [   
                'user_id'                   => $data['user_id'],
                'linkable_id'               => $data['linkable_id'],
                'linkable_type'             => $data['linkable_type'],
                'review_comment'            => isset( $data['review_comment'] ) ? $data['review_comment'] : NULL,
                'rating'                    => isset( $data['rating'] ) ? $data['rating'] : NULL,
                'rating_responsiveness'     => isset( $data['rating_responsiveness'] ) ? $data['rating_responsiveness'] : NULL,
                'rating_quality'            => isset( $data['rating_quality'] ) ? $data['rating_quality'] : NULL,
                'rating_value_for_money'    => isset( $data['rating_value_for_money'] ) ? $data['rating_value_for_money'] : NULL,
                'rating_availability'       => isset( $data['rating_availability'] ) ? $data['rating_availability'] : NULL,
                'is_approved'               => isset( $data['is_approved'] ) ? $data['is_approved'] : 0,
                'created_by'                => $data['email'],
                'updated_by'                => $data['email']
            ]
        );
    }

    /* Update the Reviews based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateReviews($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
