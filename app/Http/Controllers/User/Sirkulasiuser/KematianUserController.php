<?php

namespace App\Http\Controllers\User\Sirkulasiuser;

use App\Models\Kematian;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

class KematianUserController extends Controller
{
    function index()
    {
        $id_pengguna = request()->user()->id_pengguna;
        $data['list_kematian'] = Kematian::where('id_pengguna', $id_pengguna)->get();
        $data['kematian'] = Penduduk::all();
        return view('user.sirkulasi.kematian.index', $data);
    }
    function create()
    {
        $data['penduduk'] = Penduduk::all();
        return view('user.sirkulasi.kematian.create', $data);
    }
    function store()
    {

        $kematian = new Kematian();
        $kematian->id_pengguna = request()->user()->id_pengguna;
        $kematian->nik = request('nik');
        $kematian->tgl_mendu = request('tgl_mendu');
        $kematian->sebab = request('sebab');
        $kematian->hari_mati = request('hari_mati');
        $kematian->tempat_mati = request('tempat_mati');
        $kematian->tempat_makam = request('tempat_makam');
        $kematian->save();

        $nik = request('nik');
        $penduduk = Penduduk::find($nik = $nik);
        $penduduk->status = '2';
        $penduduk->save();

        return redirect('user/kematian');
    }
    function edit(Kematian $kematian)
    {
        $data['kematian'] =  Kematian::all();
        $data['kematian'] =  $kematian;
        $data['penduduk'] = Penduduk::all();

        return view('user.sirkulasi.kematian.edit', $data);
    }
    function update(Kematian $kematian)
    {

        $kematian->tgl_mendu = request('tgl_mendu');
        $kematian->sebab = request('sebab');
        $kematian->hari_mati = request('hari_mati');
        $kematian->tempat_mati = request('tempat_mati');
        $kematian->tempat_makam = request('tempat_makam');
        $kematian->save();

        return redirect('user/kematian');
    }
    function destroy(Kematian $kematian)
    {
        $kematian->delete();
        return redirect('user/kematian');
    }
}
