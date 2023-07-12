<?php

namespace App\Models;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Penduduk;
use App\Models\Kelahiran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'no_kk';

    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'no_kk');
    }
    public function Kelahiran()
    {
        return $this->belongsTo(Kelahiran::class, 'no_kk');
    }
    public function Penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'nik');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
