<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version June 21, 2019, 1:21 am UTC
 *
 * @property string name
 * @property float price
 * @property string description
 * @property integer stock
 * @property string picture
 * @property integer category_id
 */
class Item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'picture',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'double',
        'description' => 'string',
        'stock' => 'integer',
        'picture' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'stock' => 'required',
        'picture' => 'required',
         'category_id' => 'required'
    ];

    public function category()
   {
       return $this->belongsTo('App\Models\Category');
   }
}
