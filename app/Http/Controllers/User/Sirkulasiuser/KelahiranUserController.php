<?php

namespace App\Http\Controllers\User\Sirkulasiuser;

use App\Models\Kelahiran;
use App\Http\Controllers\Controller;
use App\Models\Keluarga;

class KelahiranUserController extends Controller
{
    function index()
    {
        $id_pengguna = request()->user()->id_pengguna;
        $data['list_kelahiran'] = Kelahiran::where('id_pengguna', $id_pengguna)->get();
        return view('user.sirkulasi.kelahiran.index', $data);
    }
    function create()
    {
        $data['keluarga'] = Keluarga::all();
        return view('user.sirkulasi.kelahiran.create', $data);
    }
    function store()
    {
        $kelahiran = new Kelahiran();
        $kelahiran->id_pengguna = request()->user()->id_pengguna;
        $kelahiran->no_kk = request('no_kk');
        $kelahiran->nama = request('nama');
        $kelahiran->tempat_lh = request('tempat_lh');
        $kelahiran->anakke = request('anakke');
        $kelahiran->alamat = request('alamat');
        $kelahiran->tgl_lh = request('tgl_lh');
        $kelahiran->jekel = request('jekel');
        $kelahiran->save();

        return redirect('user/kelahiran');
    }
    function edit($kelahiran)
    {
        $data['kelahiran'] =  Kelahiran::find($kelahiran);

        $data['list_keluarga'] =   Keluarga::all();
        return view('user.sirkulasi.kelahiran.edit', $data);
    }
    function update(Kelahiran $kelahiran)
    {
        $kelahiran->no_kk = request('no_kk');
        $kelahiran->nama = request('nama');
        $kelahiran->tempat_lh = request('tempat_lh');
        $kelahiran->anakke = request('anakke');
        $kelahiran->alamat = request('alamat');
        $kelahiran->tgl_lh = request('tgl_lh');
        $kelahiran->jekel = request('jekel');
        $kelahiran->save();

        return redirect('user/kelahiran');
    }
    function destroy(Kelahiran $kelahiran)
    {
        $kelahiran->delete();
        return redirect('user/kelahiran');
    }
}
