<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supplier
 * @package App\Models
 * @version June 25, 2019, 7:02 am UTC
 *
 * @property string company_name
 * @property string phone
 * @property string address
 * @property string city
 * @property string region
 * @property string postalcode
 * @property string country
 * @property string fax
 * @property string email
 */
class Supplier extends Model
{
    use SoftDeletes;

    public $table = 'suppliers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_name',
        'phone',
        'address',
        'city',
        'region',
        'postalcode',
        'country',
        'fax',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postalcode' => 'string',
        'country' => 'string',
        'fax' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
        'region' => 'required',
        'postalcode' => 'required',
        'country' => 'required',
        'fax' => 'required',
        'email' => 'required'
    ];

    
     public function purchase()
   {
       return $this->hasMany('App\Models\Purchase');
   }
}
