<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Item;
class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kategori',
    ];
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y, h:i:s');
    }
    public function item(){
        return $this->hasMany(Item::class);
    }
}
