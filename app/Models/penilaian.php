<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class penilaian
 * @package App\Models
 * @version April 27, 2020, 5:40 pm UTC
 *
 * @property integer nilai
 */
class penilaian extends Model
{
    use SoftDeletes;

    public $table = 'penilaians';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nilai'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nilai' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
