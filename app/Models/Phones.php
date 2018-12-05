<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $fathers_name
 * @property string $last_name
 * @property string $ImageDate
 * @property string $password
 * @property integer $status
 */
class Phones extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'phones';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'country_code', 'phone_number', 'is_default', 'created_by', 'updated_by' ];

}
