<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Janji;

class JanjiController extends Controller{

    function index(){
        $data['list_janji'] = Janji::all();
        return view('content.admin.profil-web.janji.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.janji.create');
    }
    function store()
    {
        $janji = new Janji();
        $janji->nama = request('nama');
        $janji->link = request('link');
        $janji->save();
        $janji->handleUploadFoto();

        return redirect('data-manager/janji')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Janji $janji)
    {
        $data['janji'] =  $janji;
        return view('content.admin.profil-web.janji.edit', $data);
    }
    function show($janji)
    {
        $data['janji'] = Janji::find($janji);
        return view('content.admin.profil-web.janji.show', $data);
    }
    function update(Janji $janji)
    {
        $janji->nama = request('nama');
        $janji->link = request('link');
        $janji->save();
        if (request('gambar')) $janji->handleUploadFoto();

        return redirect('data-manager/janji')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Janji $janji)
    {
        $janji->delete();
        $janji->handleDelete();

        return redirect('data-manager/janji')->with('danger', 'Data Berhasil Dihapus');
    }

}
