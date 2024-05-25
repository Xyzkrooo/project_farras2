<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang', 'harga', 'stok', 'id_merek'];
    protected $visible = ['nama_barang', 'harga', 'stok', 'id_merek'];
    public function merek()
    {
        return $this->belongsTo(merek::class, 'id_merek');
    }
}
