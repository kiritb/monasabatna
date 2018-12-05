<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $vendor_name
 * @property string $fathers_name
 * @property string $family_name
 * @property string $email
 * @property string $accessToken
 * @property datetime $expiry_date
 * @property string $license_no
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
    protected $fillable = ['vendor_name', 'fathers_name', 'family_name', 'email', 'accessToken', 'expiry_date', 'license_no', 'status','created_by', 'updated_by' ];

}
