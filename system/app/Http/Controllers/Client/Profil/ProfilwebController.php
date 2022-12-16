<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Models\Direktori;

class ProfilwebController extends Controller
{
    function showProfil()

    {
        $data['list_direktori'] = Direktori::all();
        $data['list_profil'] = Profil::all();
        return view('content.front.profil.profil',$data);
    }
}
