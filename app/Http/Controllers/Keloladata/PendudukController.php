<?php

namespace App\Http\Controllers\KelolaData;

use App\Models\Penduduk;
use App\Http\Controllers\Controller;

class PendudukController extends Controller
{
    function index()
    {
        $data['list_penduduk'] = Penduduk::all();
        return view('content.keloladata.penduduk.index', $data);
    }
    function create()
    {
        return view('content.keloladata.penduduk.create');
    }
    function store()
    {
        $penduduk = Penduduk::find(request('nik'));
        if ($penduduk) return back();
        $penduduk = new Penduduk();
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

        return redirect('admin/penduduk');
    }
    function show(Penduduk $penduduk)
    {
        $data['penduduk'] = $penduduk;
        return view('content.keloladata.penduduk.show', $data);
    }

    function edit(Penduduk $penduduk)
    {
        $data['penduduk'] =  $penduduk;
        return view('content.keloladata.penduduk.edit', $data);
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

        return redirect('admin/penduduk');
    }
    function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect('admin/penduduk');
    }
}
