<?php

namespace App\Http\Controllers\Client\Profil;
use App\Http\Controllers\Controller;
use App\Models\Komposisi;
use App\Models\Direktori;

class KomposisiwebController extends Controller{

    function showKomposisi(){
        $data['list_direktori'] = Direktori::all();
        $data['jabatan'] = Komposisi::where('level','jabatan')->get();
        $data['usia'] = Komposisi::where('level','usia')->get();
        $data['jenis_kelamin'] = Komposisi::where('level','jenis_kelamin')->get();
        $data['pendidikan'] = Komposisi::where('level','pendidikan')->get();
        return view('content.front.profil.komposisi', $data);
    }

    function countall(){

        $data = Struktur::select('usia')->sum('usia')->groupBy('usia')->get();
    }
}
