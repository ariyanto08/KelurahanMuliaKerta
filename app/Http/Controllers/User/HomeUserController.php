<?php

namespace App\Http\Controllers\User;

use App\Models\Keluarga;
use App\Models\Kematian;
use App\Models\Penduduk;
use App\Models\Kelahiran;
use App\Http\Controllers\Controller;
use App\Models\Anggota;

class HomeUserController  extends Controller
{

    function index()
    {
        $penduduk = Penduduk::count();
        $keluarga = Keluarga::count();
        $kematian = Kematian::count();
        $kelahiran = Kelahiran::count();
        return view('user.home.index', compact('penduduk', 'keluarga', 'kematian', 'kelahiran'));
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    // table mati
    function indexmati()
    {
        $data['list_penduduk'] = Penduduk::all();
        return view('user.kelolasurat.mati.index', $data);
    }
    function cetakmati()
    {
        $data['list_kematian'] = Kematian::all();
        $nama_pelapor = request()->input('nama_pelapor');
        $nik_pelapor = request()->input('nik_pelapor');
        $tmp_lh_pelapor = request()->input('tmp_lh_pelapor');
        $tgl_lh_pelapor = request()->input('tgl_lh_pelapor');
        $pekerjaan_pelapor = request()->input('pekerjaan_pelapor');
        $alamat_pelapor = request()->input('alamat_pelapor');
        $hub_pelapor = request()->input('hub_pelapor');
        $tgl_sur = request()->input('tgl_sur');
        return view('user.kelolasurat.surat.su-mati.sumati', compact('nama_pelapor', 'nik_pelapor', 'tmp_lh_pelapor', 'tgl_lh_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor', 'hub_pelapor', 'tgl_sur'), $data);
    }

    function indexlahir()
    {
        $data['list_lahir'] = Kelahiran::all();
        return view('user.kelolasurat.lahir.index', $data);
    }
    function cetaklahir()
    {
        $data['list_kelahiran'] = Kelahiran::all();
        $data['list_penduduk'] = Penduduk::all();
        $data['list_keluarga'] = Keluarga::all();
        $data['list_anggota'] = Anggota::all();
        $tanggalsurat = request()->input('tanggalsurat');
        return view('user.kelolasurat.surat.su-lahir.sulahir', compact('tanggalsurat'), $data);
    }
}
