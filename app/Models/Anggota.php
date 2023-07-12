<?php

namespace App\Models;

use App\Models\User;
use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota_keluarga';
    protected $primaryKey = 'id_anggota';

    public function Keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'no_kk');
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
