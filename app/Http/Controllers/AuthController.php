<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('login');
    }

    function login()
    {


        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin/dashboard')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('user')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('user/dashboard')->with('success', 'Login Berhasil');
        }


        return back()->with('error', 'Login Gagal');
    }

    public function logout()
    {
        auth()->logout();
        auth()->guard('admin')->logout();
        auth()->guard('user')->logout();

        return redirect('login');
    }
}
