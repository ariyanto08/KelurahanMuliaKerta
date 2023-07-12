<?php

namespace App\Models;

use App\Models\User;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kematian extends Model
{
    use HasFactory;
    protected $table = 'meninggal';
    protected $primaryKey = 'id_mendu';

    function Penduduk(){
        return $this->belongsTo(Penduduk::class,'nik');
    }
    function User()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
