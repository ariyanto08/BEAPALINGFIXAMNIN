<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Maklumat;

class MaklumatController extends Controller{

    function index(){
        $data['list_maklumat'] = Maklumat::all();
        return view('content.admin.profil-web.maklumat.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.maklumat.create');
    }
    function store()
    {
        $maklumat = new Maklumat();
        $maklumat->nama = request('nama');
        $maklumat->handleUploadFoto();
        $maklumat->save();

        return redirect('data-manager/maklumat')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Maklumat $maklumat)
    {
        $data['maklumat'] =  $maklumat;
        return view('content.admin.profil-web.maklumat.edit', $data);
    }
    function update(Maklumat $maklumat)
    {
        $maklumat->nama = request('nama');
        $maklumat->save();
        if (request('gambar')) $maklumat->handleUploadFoto();
        return redirect('data-manager/maklumat')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Maklumat $maklumat)
    {
        $maklumat->delete();
        $maklumat->handleDelete();

        return redirect('data-manager/maklumat')->with('danger', 'Data Berhasil Dihapus');
    }

}
