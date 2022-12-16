<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Video;
use App\Models\Iklan;
use App\Models\Diagram;
use App\Models\Direktori;


class ClientController extends Controller
{
    function showHome()
    {
        $data['list_direktori'] = Direktori::all();
        $data['list_diagram'] = Diagram::all();
        $data['list_iklan'] = Iklan::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
        $data['list_video'] = Video::orderBy('id', 'DESC')->take(3)->get();
        return view('content.front.home',$data);
    }

   
}
