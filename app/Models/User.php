<?php

namespace App\Models;

use App\Models\Anggota;
use App\Models\Keluarga;
use App\Models\Kematian;
use App\Models\Penduduk;
use App\Models\Kelahiran;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = "user";
    protected $primaryKey = "id_pengguna";

    function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_pengguna');
    }
    function Keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_pengguna');
    }
    function Kelahiran()
    {
        return $this->belongsTo(Kelahiran::class, 'id_pengguna');
    }
    function Kematian()
    {
        return $this->belongsTo(Kematian::class, 'id_pengguna');
    }
    function Penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_pengguna');
    }
}
