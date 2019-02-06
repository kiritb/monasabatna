<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $short_description
 * @property integer $prior_intimation_days
 * @property integer $is_express_deal
 * @property integer $order_no
 * @property float $rating
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class EventOrganisers extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_organisers';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'name', 'short_description','prior_intimation_days', 'is_express_deal', 'order_no', 'rating', 'fb_link', 'twitter_link',  'status','created_by', 'updated_by' ];


    public static function createEventOrganisers($data)
    {

        self::create ( 
            [
                'vendor_id'                     => $data['vendor_id'],
                'name'                          => $data['name'],
                'short_description'             => isset( $data['short_description'] ) ? $data['short_description'] : NULL,
                'order_no'                      => isset( $data['order_no'] ) ? $data['order_no'] : NULL,
                'prior_intimation_days'         => $data['prior_intimation_days'],
                'is_express_deal'               => isset( $data['is_express_deal'] ) ? $data['is_express_deal'] : 0,
                'rating'                        => isset($data['rating'] ) ? $data['rating'] : 0,
                'fb_link'                       => isset($data['fb_link']) ? $data['fb_link'] : NULL,
                'twitter_link'                  => isset($data['twitter_link']) ? $data['twitter_link'] : NULL,
                'status'                        => 1,
                'created_by'                    => $data['email'],
                'updated_by'                    => $data['email']
            ]
        );
    }

     /* Update the BankAccounts based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateEventOrganisers($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
