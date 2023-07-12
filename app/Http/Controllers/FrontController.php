<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FrontController extends Controller
{

    function home()
    {
        return view('front.home');
    }


    function visi()
    {
        return view('front.visi');
    }


    function kontak()
    {
        return view('front.kontak');
    }
    function struktur()
    {
        return view('front.struktur');
    }
}
