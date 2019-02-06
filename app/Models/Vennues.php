<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property string $long_description
 * @property integer $min_guest_cap
 * @property integer $max_guest_cap
 * @property datetime $start_time
 * @property datetime $end_time
 * @property integer $transacton_count
 * @property integer $order_no
 * @property integer $language_id
 * @property integer $is_express_deal
 * @property string $fb_link
 * @property string $twitter_link
 * @property float $rating
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Vennues extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vennues';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name', 'short_description', 'long_description', 'points', 'min_guest_cap', 'max_guest_cap', 'start_time', 'end_time', 'transacton_count', 'order_no', 'language_id', 'is_express_deal', 'fb_link', 'twitter_link', 'rating', 'status','created_by', 'updated_by' ];


    public static function createVennues($data)
    {

        self::Create(
            [   
                'vendor_id'             => $data['vendor_id'], 
                'name'                  => $data['name'],
                'short_description'     => $data['short_description'],  
                'long_description'      => isset( $data['long_description'] ) ? $data['long_description'] : NULL,
                'points'                => isset( $data['points'] ) ? $data['points'] : NULL,
                'min_guest_cap'         => $data['min_guest_cap'],
                'max_guest_cap'         => $data['max_guest_cap'], 
                'start_time'            => $data['start_time'], 
                'end_time'              => $data['end_time'],
                'order_no'              => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'home_page_display'     => isset( $data['home_page_display'] ) ? $data['home_page_display'] : 0,
                'is_express_deal'       => isset( $data['is_express_deal'] ) ? $data['is_express_deal'] : 0,
                'fb_link'               => isset( $data['fb_link'] ) ? $data['fb_link'] : NULL,
                'twitter_link,'         => isset( $data['twitter_link'] ) ? $data['twitter_link'] : NULL, 
                'rating'                => isset( $data['rating'] ) ? $data['rating'] : 0.0,
                'created_by'            => $data['email'],
                'updated_by'            => $data['email']
            ]
        );
    }

    /* Update the Vennues based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateVennues($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
