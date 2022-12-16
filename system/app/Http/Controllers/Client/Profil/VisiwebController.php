<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Visi;
use App\Models\Direktori;

class VisiwebController extends Controller
{
    function showVisi()
    {
        $data['list_direktori'] = Direktori::all();
        $data['visi'] = Visi::where('level','Visi')->get();
        $data['misi'] = Visi::where('level','Misi')->get();
        $data['motto'] = Visi::where('level','Motto')->get();
        return view('content.front.profil.visiweb',$data);
    }
}
