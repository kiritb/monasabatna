<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




/**
 * @property integer $id
 * @property integer $service_tax
 * @property float $service_fee
 * @property float $cancellation_fee
 * @property integer $partial_payment_fee
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
    protected $fillable = [ 'service_tax', 'service_fee', 'cancellation_fee', 'partial_payment_fee' ,'status','created_by', 'updated_by' ];



    public static function createServiceTax($data)
    {

        self::create ( 
            [
                'service_tax'               => $data['service_tax'],
                'service_fee'               => $data['service_fee'],
                'cancellation_fee'          => $data['cancellation_fee'],
                'partial_payment_fee'       => $data['partial_payment_fee']
                'status'                    => 1,
                'created_by'                => $data['email'],
                'updated_by'                => $data['email']
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
