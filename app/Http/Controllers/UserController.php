<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('content.user.index', $data);
    }
    function create()
    {
        return view('content.user.create');
    }
    function store()
    {
        $user = new User();
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function edit(User $user)
    {
        $data['user'] =  $user;
        return view('content.user.edit', $data);
    }
    function update(User $user)
    {
        $user->username = request('username');
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
