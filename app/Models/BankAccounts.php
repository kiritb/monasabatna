<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $vendor_id
 * @property string $account_name
 * @property string $bank_name
 * @property string $iban_name
 * @property string $account_number
 * @property datetime $payment_method
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class BankAccounts extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bank_accounts';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'account_name', 'bank_name', 'iban_name', 'account_number', 'payment_method', 'status','created_by', 'updated_by' ];



    public static function createBankAccounts($data)
    {

        self::create ( 
            [
                'vendor_id'        =>$data['vendor_id'],
                'account_name'     =>$data['account_name'],
                'bank_name'        =>$data['bank_name'],
                'iban_name'        =>$data['iban_name'],
                'account_number'   =>$data['account_number'],
                'payment_method'   =>$data['payment_method'],
                'created_by'       =>$data['email'],
                'updated_by'       =>$data['email']
            ]
        );
    }

     /* Update the BankAccounts based on Id
        And also use the same function to delete [status => 0 ]
    */
    public static function updateBankAccounts($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

}
