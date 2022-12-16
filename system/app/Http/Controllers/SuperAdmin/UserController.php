<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller{
    function index(){
        $data['admin'] =User::where('level','1')->get();
        $data['operasional'] =User::where('level','2')->get();
        return view('content.super-admin.user.index',$data);
    }
    function create(){
        return view('content.super-admin.user.create');
    }
    function store(){
        $user = new User;
        $user ->nama = request('nama');
        $user ->nip = request('nip');
        $user ->email = request('email');
        $user ->password = bcrypt (request('password'));
        $user ->level = request('level');
        $user->save();

        return redirect('master-data/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(User $user){
        $data['user'] = $user;
        return view('content.super-admin.user.show',$data);
    }
    function edit(User $user){
        $data['user'] = $user;
        return view('content.super-admin.user.edit',$data);
    }
    function update(User $user){
        $user ->nama = request('nama');
        $user ->nip = request('nip');
        $user ->email = request('email');
        if(request('password')) $user ->password = bcrypt (request('password'));
        $user ->level = request('level');
        $user->save();

        return redirect('master-data/user')->with('success', 'Data Berhasil Dihapus');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('master-data/user')->with('danger', 'Data Telah Dihapus');
    }

}
