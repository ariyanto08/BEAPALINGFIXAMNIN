<?php

namespace App\Http\Controllers\Admin\Publikasi;
use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller{

    function index(){
        $data['list_berita'] = Berita::all();
        return view('content.admin.publikasi.berita.index', $data);
    }
    function create()
    {
        return view('content.admin.publikasi.berita.create');
    }

    // function Beritafilter()
    // {
    //     $nama = request('nama');
    //     $data['nama'] = $nama;
    //     $data['list_berita'] = Berita::where('nama', 'like', "%$nama%")->get();
    //     return view('content.front.publikasi.berita', $data);
    // }

    function store()
    {
        $berita = new Berita();
        $berita->nama = request('nama');
        // $berita->penulis = request('penulis');
        $berita->kategori = request('kategori');
        $berita->deskripsi = request('deskripsi');
        $berita->save();
        $berita->handleUploadFoto();

        return redirect('data-manager/berita')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Berita $berita)
    {
        $data['berita'] =  $berita;
        return view('content.admin.publikasi.berita.edit', $data);
    }
    function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('content.admin.publikasi.berita.show', $data);
    }
    function update(Berita $berita)
    {
        $berita->nama = request('nama');
        // $berita->penulis = request('penulis');
        $berita->kategori = request('kategori');
        $berita->deskripsi = request('deskripsi');
        $berita->save();
        if (request('foto')) $berita->handleUploadFoto();

        return redirect('data-manager/berita')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Berita $berita)
    {
        $berita->delete();
        $berita->handleDelete();

        return redirect('data-manager/berita')->with('danger', 'Data Berhasil Dihapus');
    }

}
