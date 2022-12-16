<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use App\Models\Direktori;

class WilayahwebController extends Controller
{
    function showWilayah()

    {
        $data['list_direktori'] = Direktori::all();
        $data['list_wilayah'] = Wilayah::all();
        return view('content.front.profil.wilayah',$data);
    }
}
