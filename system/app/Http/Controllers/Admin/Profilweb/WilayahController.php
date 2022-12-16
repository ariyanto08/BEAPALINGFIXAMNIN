<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Wilayah;

class WilayahController extends Controller{

    function index(){
        $data['list_wilayah'] = Wilayah::all();
        return view('content.admin.profil-web.wilayah.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.wilayah.create');
    }
    function store()
    {
        $wilayah = new Wilayah();
        $wilayah->nama = request('nama');
        $wilayah->handleUploadFoto();
        $wilayah->save();

        return redirect('data-manager/wilayah')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Wilayah $wilayah)
    {
        $data['wilayah'] =  $wilayah;
        return view('content.admin.profil-web.wilayah.edit', $data);
    }
    function update(Wilayah $wilayah)
    {
        $wilayah->nama = request('nama');
        $wilayah->save();
        if (request('gambar')) $wilayah->handleUploadFoto();

        return redirect('data-manager/wilayah')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();
        $wilayah->handleDelete();

        return redirect('data-manager/wilayah')->with('danger', 'Data Berhasil Dihapus');
    }

}
