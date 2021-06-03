<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_perusahaan',
        'no_phone',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'negara',
        'fax',
        'email',
    ];
}
