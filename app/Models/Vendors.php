<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $company_name
 * @property string $email
 * @property string $password
 * @property string $accessToken
 * @property datetime $expiry_date
 * @property string $license_no
 * @property string $note
 * @property string $fb_link
 * @property string $twitter_link
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Vendors extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vendors';

    /**
     * @var array
     */
    protected $fillable = ['company_name', 'email', 'password','accessToken', 'expiry_date', 'license_no', 'note',
    'fb_link','twitter_link','status','created_by', 'updated_by' ];

}
