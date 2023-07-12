<?php

namespace App\Models;

use App\Models\User;
use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelahiran extends Model
{
    use HasFactory;
    protected $table = "kelahiran";
    protected $primaryKey = 'id_lahir';

    public function Keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'no_kk');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
