<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property integer $event_type_id
 * @property string $short_description
 * @property datetime $start_date
 * @property datetime $end_date
 * @property integer $order_no
 * @property integer $language_id
 * @property string $is_express_deal
 * @property string $home_page_display
 * @property float $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property datetime booking_last_date
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Events extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'events';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name','event_type_id' ,'short_description', 'start_date', 'end_date', 'order_no', 'language_id', 'is_express_deal', 'home_page_display', 'rating', 'fb_link', 'twitter_link', 'booking_last_date', 'status','created_by', 'updated_by' ];



    public static function createEvents($data)
    {

        self::create ( 
            [
                'vendor_id'                 => $data['vendor_id'],
                'name'                      => $data['name'],
                'event_type_id'             => $data['event_type_id'],
                'short_description'         => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'start_date'                => $data['start_date'],
                'end_date'                  => $data['end_date'],
                'order_no'                  => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'is_express_deal'           => isset( $data['is_express_deal'] ) ? $data['is_express_deal'] : 0,
                'home_page_display'         => isset( $data['home_page_display'] ) ? $data['home_page_display'] : 0,
                'rating'                    => isset( $data['rating'] ) ? $data['rating'] : 0.0,
                'fb_link'                   => isset( $data['fb_link'] ) ? $data['fb_link'] : NULL,
                'twitter_link'              => isset( $data['twitter_link'] ) ? $data['twitter_link'] : NULL,
                'booking_last_date'         => $data['booking_last_date'],
                'status'                    => 1,
                'created_by'                => $data['email'],
                'updated_by'                => $data['email']
            ]
        );
    }

     /* Update the Events based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateEvents($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
