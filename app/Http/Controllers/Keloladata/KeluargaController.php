<?php

namespace App\Http\Controllers\KelolaData;

use App\Models\Keluarga;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

class KeluargaController extends Controller
{
    function index(Penduduk $penduduk){
        $data1['list_keluarga'] = Keluarga::all();
        $data['penduduk'] = $penduduk;
        $data2['list_keluarga'] = Penduduk::all();
        return view('content.keloladata.keluarga.index', $data1,$data2);
    }
    function create(){
        $data['list_penduduk'] = Penduduk::all();
        return view('content.keloladata.keluarga.create',$data);
    }
    function store()
    {
        $keluarga = new Keluarga();
        $keluarga->no_kk = request('no_kk');
        $keluarga->nik = request('nik');
        $keluarga->desa = request('desa');
        $keluarga->rt = request('rt');
        $keluarga->rw = request('rw');
        $keluarga->kec = request('kec');
        $keluarga->kab = request('kab');
        $keluarga->prov = request('prov');
        $keluarga->save();

        return redirect('admin/keluarga');
    }


    function edit(Keluarga $keluarga)
    {
        $data['keluarga'] =  $keluarga;
        $data['list_penduduk'] = Penduduk::all();
        return view('content.keloladata.keluarga.edit', $data);
    }

    function update(Keluarga $keluarga)
    {
        $keluarga->no_kk = request('no_kk');
        $keluarga->nik = request('nik');
        $keluarga->desa = request('desa');
        $keluarga->rt = request('rt');
        $keluarga->rw = request('rw');
        $keluarga->kec = request('kec');
        $keluarga->kab = request('kab');
        $keluarga->prov = request('prov');
        $keluarga->save();

        return redirect('admin/keluarga');
    }
    function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();
        return back();
    }
}
