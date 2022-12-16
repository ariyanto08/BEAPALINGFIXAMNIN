<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Struktur;

class StrukturController extends Controller{

    function index(){
        $data['list_struktur'] = Struktur::all();
        return view('content.admin.profil-web.struktur.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.struktur.create');
    }
    function store()
    {
        $struktur = new Struktur();
        $struktur->nama = request('nama');
        $struktur->handleUploadFoto();
        $struktur->save();

        return redirect('data-manager/struktur')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Struktur $struktur)
    {
        $data['struktur'] =  $struktur;
        return view('content.admin.profil-web.struktur.edit', $data);
    }
    function update(Struktur $struktur)
    {
        $struktur->nama = request('nama');
        $struktur->save();
        if (request('gambar')) $struktur->handleUploadFoto();

        return redirect('data-manager/struktur')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Struktur $struktur)
    {
        $struktur->delete();
        $struktur->handleDelete();

        return redirect('data-manager/struktur')->with('danger', 'Data Berhasil Dihapus');
    }

}
