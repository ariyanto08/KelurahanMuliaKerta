<?php

namespace App\Http\Controllers\Sirkulasi;

use App\Models\Kematian;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;

class KematianController extends Controller
{
    function index(){
        $data['list_kematian'] = Kematian::all();
        $data['kematian'] = Penduduk::all();
        return view('content.sirkulasi.kematian.index', $data);
    }
    function create(){
        $data['penduduk'] = Penduduk::all();
        return view('content.sirkulasi.kematian.create',$data );
    }
    function store()
    {

        $kematian = new Kematian();
        $kematian->nik = request('nik');
        $kematian->tgl_mendu = request('tgl_mendu');
        $kematian->sebab = request('sebab');
        $kematian->hari_mati = request('hari_mati');
        $kematian->tempat_mati = request('tempat_mati');
        $kematian->tempat_makam = request('tempat_makam');
        $kematian->save();

       $nik = request('nik');
       $penduduk = Penduduk::find($nik=$nik);
       $penduduk->status = '2';
       $penduduk->save();

        return redirect('admin/kematian');
    }
    function edit(Kematian $kematian)
    {
        $data['kematian'] =  Kematian::all();
        $data['kematian'] =  $kematian;
        $data['penduduk'] = Penduduk::all();

        return view('content.sirkulasi.kematian.edit', $data);
    }
    function update(Kematian $kematian)
    {

        $kematian->tgl_mendu = request('tgl_mendu');
        $kematian->sebab = request('sebab');
        $kematian->hari_mati = request('hari_mati');
        $kematian->tempat_mati = request('tempat_mati');
        $kematian->tempat_makam = request('tempat_makam');
        $kematian->save();

        return redirect('admin/kematian');
    }
    function destroy(Kematian $kematian)
    {
        $kematian->delete();
        return redirect('admin/kematian');
    }

}
