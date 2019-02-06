<?php
/**
 * Created by Sublime Text.
 * User: Kirit Bellubbi
 * Date: 2017/12/15
 * Time: 11:38 AM
 */

namespace App\Http\Helpers;

use App\Models\Vendors;
use App\Models\Address;
use App\Models\Files;
use App\Models\Phones;
use App\Models\BankAccounts;


use Illuminate\Support\Facades\Hash;

class VendorHelper
{   

   public static function createVendor($data)
   {    
        \DB::beginTransaction();

        try
        {  
            $vendorObj =Vendors::create([
                            'company_name'     =>  $data['vendors']['company_name'],
                            'email'            =>  $data['vendors']['email'],
                            'password'         =>  Hash::make($data['vendors']['password']),
                            'note'             =>  $data['vendors']['note'], 
                            'fb_link'          =>  $data['vendors']['fb_link'],  
                            'twitter_link'     =>  $data['vendors']['twitter_link'],   
                            'license_no'       =>  $data['vendors']['license_no'],
                            'created_by'       =>  $data['vendors']['email'],
                            'updated_by'       =>  $data['vendors']['email']
                    ]);


            $data['address']['linkable_id']     = $vendorObj->id;
            $data['address']['linkable_type']   = 'vendors';
            $data['address']['email']           = $data['vendors']['email'];

            Address::createAddress($data['address']);

            foreach ($data['files'] as $key => $value) 
            {   
                $value['linkable_id']           = $vendorObj->id;
                
                $value['linkable_type']         = 'vendors';

                $value['email']                 = $data['vendors']['email'];
                
                Files::createFiles($value);
            }

            foreach ($data['phones'] as $key => $value) {
                
                $value["linkable_id"]           = $vendorObj->id;
                
                $value['linkable_type']         = 'vendors';

                $value['email']                 = $data['vendors']['email'];

                Phones::createPhones($value);
            }

            $data['bank_accounts']['vendor_id']       = $vendorObj->id;
            $data['bank_accounts']['email']           = $data['vendors']['email'];
            
            BankAccounts::createBankAccounts($data['bank_accounts']);

            \DB::commit();
           
            return ['vendor_id' => $vendorObj->id ];
        }
        catch( \Exception $e)
        {   
            \DB::rollBack();

            \Log::info(__CLASS__." ".__FUNCTION__." Exception Occured while creating Vendor ".print_r( $e->getMessage(), true) );

            throw new \Exception(" Exception Occured while creating Vendor", 1);

        }
   }

   public static function login($creds)
   {



    $vendorData = current(
                        Vendors::select('vendors.id','vendors.company_name','vendors.note','vendors.fb_link','vendors.twitter_link','vendors.license_no','vendors.password')
                            ->where('vendors.email', $creds['email'])
                            ->where('vendors.status',1)
                            ->get()
                            ->toArray()
                );
       
     if(!empty($vendorData))
     {
        
        if( Hash::check($creds['password'], $vendorData['password'] ) )
        {
            $token      = strtoupper(substr(md5(microtime()), 10));

            $expiryTime = date("Y-m-d H:i:s", strtotime("+ 7 days"));

            Vendors::where('id', $vendorData['id'] )->update( ['accessToken' => $token, 'expiry_date' => $expiryTime ] );

            unset($vendorData['password']);

            $vendorData['accessToken'] = $token;

            $vendorData['expiry_date'] = $expiryTime;   

            return $vendorData ;
        }

        return [];
        
    }

    return [];
        
   }
    
}
