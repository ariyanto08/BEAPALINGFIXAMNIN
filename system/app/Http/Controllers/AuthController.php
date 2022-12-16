<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function loginproses()
    {

        if (Auth::attempt(['nip' => request('nip'), 'password' => request('password')])) {
            $user = Auth::user();
            if ($user->level == 1) return redirect('master-data/dashboard-super-admin')->with('success', 'Berhasil Login Sebagai Admin');
            if ($user->level == 2) return redirect('data-manager/dashboard-admin')->with('success', 'Berhasil Login Sebagai Operasional');
        } else {
            return back()->with('warning', 'Login Error!');
        }

    }

    function logout()
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        return redirect('login')->with('warning', 'Anda Telah Logout!');
    }
}
