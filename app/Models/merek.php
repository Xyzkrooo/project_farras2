<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;
    protected $fillable = ['nama_merek'];
    protected $visible = ['nama_merek'];
    public function merek()
    {
        return $this->hasMany(merek::class, 'id_merek');
    }
}
