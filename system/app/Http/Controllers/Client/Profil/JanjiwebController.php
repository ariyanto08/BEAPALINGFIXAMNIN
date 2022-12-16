<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Janji;
use App\Models\Direktori;


class JanjiwebController extends Controller
{
    function showJanji()

    {

        $data['list_direktori'] = Direktori::all();
        $data['list_janji'] = Janji::all();
        return view('content.front.profil.janji',$data);
    }
}
