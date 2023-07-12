<?php

namespace App\Http\Controllers\User\KelolaDatauser;

use App\Models\Penduduk;
use App\Http\Controllers\Controller;

class PendudukUserController extends Controller
{
    function index()
    {
        $id_pengguna = request()->user()->id_pengguna;
        $data ['list_penduduk'] = Penduduk::where('id_pengguna', $id_pengguna)->get();
        return view('user.keloladata.penduduk.index', $data);
    }
    function create()
    {
        return view('user.keloladata.penduduk.create');
    }
    function store()
    {
        $penduduk = Penduduk::find(request('nik'));
        if ($penduduk) return back();
        $penduduk = new Penduduk();
        $penduduk->id_pengguna = request()->user()->id_pengguna;
        $penduduk->nik = request('nik');
        $penduduk->nama = request('nama');
        $penduduk->tempat_lh = request('tempat_lh');
        $penduduk->tgl_lh = request('tgl_lh');
        $penduduk->jekel = request('jekel');
        $penduduk->desa = request('desa');
        $penduduk->rt = request('rt');
        $penduduk->rw = request('rw');
        $penduduk->agama = request('agama');
        $penduduk->kawin = request('kawin');
        $penduduk->pekerjaan = request('pekerjaan');
        $penduduk->kewarganegaraan = request('kewarganegaraan');
        $penduduk->alamat = request('alamat');
        $penduduk->status = '1';
        $penduduk->save();

        return redirect('user/penduduk');
    }
    function show(Penduduk $penduduk)
    {
        $data['penduduk'] = $penduduk;
        return view('user.keloladata.penduduk.show', $data);
    }

    function edit(Penduduk $penduduk)
    {
        $data['penduduk'] =  $penduduk;
        return view('user.keloladata.penduduk.edit', $data);
    }
    function update(Penduduk $penduduk)
    {
        $penduduk->nik = request('nik');
        $penduduk->nama = request('nama');
        $penduduk->tempat_lh = request('tempat_lh');
        $penduduk->tgl_lh = request('tgl_lh');
        $penduduk->jekel = request('jekel');
        $penduduk->desa = request('desa');
        $penduduk->rt = request('rt');
        $penduduk->rw = request('rw');
        $penduduk->agama = request('agama');
        $penduduk->status = request('status');
        $penduduk->pekerjaan = request('pekerjaan');
        $penduduk->kewarganegaraan = request('kewarganegaraan');
        $penduduk->alamat = request('alamat');
        $penduduk->save();

        return redirect('user/penduduk');
    }
    function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect('user/penduduk');
    }
}
