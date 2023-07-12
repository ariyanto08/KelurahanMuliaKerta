<?php

namespace App\Http\Controllers\Sirkulasi;

use App\Models\Kelahiran;
use App\Http\Controllers\Controller;
use App\Models\Keluarga;

class KelahiranController extends Controller
{
    function index()
    {
        $data['list_kelahiran'] = Kelahiran::all();
        return view('content.sirkulasi.kelahiran.index', $data);
    }
    function create()
    {
        $data['keluarga'] = Keluarga::all();
        return view('content.sirkulasi.kelahiran.create', $data);
    }
    function store()
    {
        $kelahiran = new Kelahiran();
        $kelahiran->no_kk = request('no_kk');
        $kelahiran->nama = request('nama');
        $kelahiran->tempat_lh = request('tempat_lh');
        $kelahiran->anakke = request('anakke');
        $kelahiran->alamat = request('alamat');
        $kelahiran->tgl_lh = request('tgl_lh');
        $kelahiran->jekel = request('jekel');
        $kelahiran->save();

        return redirect('admin/kelahiran');
    }
    function edit($kelahiran)
    {
        $data['kelahiran'] =  Kelahiran::find($kelahiran);

        $data['list_keluarga'] =   Keluarga::all();
        return view('content.sirkulasi.kelahiran.edit', $data);
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

        return redirect('admin/kelahiran');
    }
    function destroy(Kelahiran $kelahiran)
    {
        $kelahiran->delete();
        return redirect('admin/kelahiran');
    }
}
