<?php

namespace App\Http\Controllers\Admin\Publikasi;
use App\Http\Controllers\Controller;
use App\Models\Iklan;

class IklanController extends Controller{

    function index(){
        $data['list_iklan'] = Iklan::all();
        return view('content.admin.publikasi.iklan.index', $data);
    }
    function create()
    {
        return view('content.admin.publikasi.iklan.create');
    }
    function store()
    {
        $iklan = new Iklan();
        $iklan->handleUploadFoto();
        $iklan->deskripsi = request('deskripsi');
        $iklan->save();

        return redirect('data-manager/iklan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Iklan $iklan)
    {
        $data['iklan'] =  $iklan;
        return view('content.admin.publikasi.iklan.edit', $data);
    }
    function show($iklan)
    {
        $data['iklan'] = Iklan::find($iklan);
        return view('content.admin.publikasi.iklan.show', $data);
    }
    function update(Iklan $iklan)
    {
        $iklan->deskripsi = request('deskripsi');
        $iklan->save();
        if (request('foto')) $iklan->handleUploadFoto();

        return redirect('data-manager/iklan')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Iklan $iklan)
    {
        $iklan->delete();
        $iklan->handleDelete();

        return redirect('data-manager/iklan')->with('danger', 'Data Berhasil Dihapus');
    }

}
