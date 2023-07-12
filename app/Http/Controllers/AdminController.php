<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index(){
        $data['list_admin'] = Admin::all();
        return view('content.admin.index', $data);
    }
    function create(){
        return view('content.admin.create');
    }
    function store()
    {
        $admin = new Admin();
        $admin->username = request('username');
        $admin ->password = bcrypt (request('password'));
        $admin->save();

        return redirect('admin')->with('success', 'Data Berhasil Ditambahkan');
    }
    function edit(Admin $admin)
    {
        $data['admin'] =  $admin;
        return view('content.admin.edit', $data);
    }
    function update(Admin $admin)
    {
        $admin->username = request('username');
        if(request('password')) $admin ->password = bcrypt (request('password'));
        $admin->save();

        return redirect('admin')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect('admin')->with('danger', 'Data Berhasil Dihapus');
    }
}
