<?php

namespace App\Http\Controllers\KelolaData;

use App\Models\Anggota;
use App\Models\Keluarga;
use App\Models\Penduduk;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    function index(Keluarga $keluarga)
    {
        $data['keluarga'] = $keluarga;
        $data['list_penduduk'] = Penduduk::all();
        $data['list_keluarga'] = Keluarga::all();
        $data['list_anggota'] = Anggota::all();
        $data['anggota'] = Anggota::all();

        return view('content.keloladata.keluarga.anggota.index', $data);
    }

    function create()
    {
        return view('content.keloladata.keluarga.anggota.index');
    }

    function store()
    {
        $anggota = new Anggota;

        $anggota->nik = request('nik');
        $anggota->no_kk = request('no_kk');
        $anggota->hubungan = request('hubungan');

        $anggota->save();

        return back();
    }

    function show(Keluarga $keluarga)
    {
        $data['keluarga'] = $keluarga;
        $data['anggota'] = Anggota::all();
        return view('content.keloladata.keluarga.show', $data);
    }

    function showAnggota(Keluarga $keluarga)
    {
        $data['list_anggota'] = Anggota::all();
        $data['keluarga'] = $keluarga;
        $data['list_penduduk'] = Penduduk::all();
        $data['list_keluarga'] = Keluarga::all();
        $data['anggota'] = Anggota::all();
        return view('content.keloladata.keluarga.anggota.index', $data);
    }

    function edit(Anggota $anggota)
    {
        $data['anggota'] = $anggota;
        return view('content.keloladata.keluarga.edit', $data);
    }

    function update(Anggota $anggota)
    {
        $anggota->no_kk = request('no_kk');
        $anggota->nik = request('nik');
        $anggota->hubungan = request('hubungan');
        $anggota->desa = request('desa');
        $anggota->rt = request('rt');
        $anggota->rt = request('rw');
        $anggota->nama = request('nama');
        $anggota->save();

        return redirect('admin/anggota');
    }

    function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return back();
    }
}
