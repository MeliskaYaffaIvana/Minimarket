<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Item as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use App\Models\Kategori;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_item',
        'merk_item',
        'kategori_id',
        'harga_jual',
        'satuan',
        'stock',
        'item_image',
    ];
    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
}
