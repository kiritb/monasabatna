<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $fathers_name
 * @property string $family_name
 * @property string $ImageDate
 * @property string $password
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Users extends Model implements JWTSubject
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [ 'email', 'first_name', 'fathers_name', 'family_name', 'password', 'status', 'created_by', 'updated_by' ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
