<?php

namespace App\Http\Controllers\Client\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Direktori;


class BeritawebController extends Controller
{
    function showBerita()

    {
        $data['list_direktori'] = Direktori::all();
        $data['list_berita'] = Berita::latest()->paginate(10);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('content.front.publikasi.berita', $data);
    }

    function filter()
    {
        $data['list_direktori'] = Direktori::all();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_berita'] = Berita::where('nama', 'like', "%$nama%")->paginate(10);
        return view('content.front.publikasi.berita', $data);
    }

    function showwebBerita($berita)
    {
        $data['list_direktori'] = Direktori::all();
        $data['berita'] = Berita::find($berita);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('content.front.publikasi.detail', $data);
    }
}
