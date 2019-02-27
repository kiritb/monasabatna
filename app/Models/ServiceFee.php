<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property integer $service_tax
 * @property integer $booking_commisssion
 * @property integer $express_deals_commisssion
 * @property integer $cancellation_commisssion
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class ServiceFee extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'service_fee';

    /**
     * @var array
     */
    protected $fillable = [ 'service_tax', 'booking_commisssion', 'express_deals_commisssion', 'cancellation_commisssion' ,'status','created_by', 'updated_by' ];



    public static function createServiceTax($data)
    {

        self::create ( 
            [
                'service_tax'                           => $data['service_tax'],
                'booking_commisssion'                   => $data['booking_commisssion'],
                'express_deals_commisssion'             => $data['express_deals_commisssion'],
                'cancellation_commisssion'              => $data['cancellation_commisssion'],
                'status'                                => 1,
                'created_by'                            => $data['email'],
                'updated_by'                            => $data['email']
            ]
        );
    }

     /* Update the Service Tax based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateServiceTax($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
