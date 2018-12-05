<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $linkable_id
 * @property string $linkable_type
 * @property string $file_path
 * @property string $file_type
 * @property string $file_extension
 * @property integer $status
 * @property datetime $created_at
 * @property datetime $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class Files extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'files';

    /**
     * @var array
     */
    protected $fillable = ['linkable_id', 'linkable_type', 'file_path', 'file_type', 'file_extension', 'status', 'created_by', 'updated_by' ];

}
