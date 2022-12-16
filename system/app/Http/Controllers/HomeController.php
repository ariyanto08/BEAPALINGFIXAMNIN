<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Iklan;
use App\Models\Video;
use App\Models\Berita;
use App\Http\Controllers\Controller;


class HomeController extends Controller{

    function showDashboardSuperAdmin(){
        $data['user'] = User::where('level','2')->count();
        return view('menu.dashboard-super-admin',$data);
    }
    function showDashboardAdmin(){
        $data['berita'] = Berita::orderBy('id')->count();
        $data['video'] = Video::orderBy('id')->count();
        $data['iklan'] = Iklan::orderBy('id')->count();
        return view('menu.dashboard-admin',$data);
    }

}
