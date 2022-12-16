<?php

namespace App\Http\Controllers\Admin\Peraturan;
use App\Http\Controllers\Controller;
use App\Models\Direktori;

class DirektoriController extends Controller{

    function index(){
        $data['list_direktori'] = Direktori::all();
        return view('content.admin.peraturan.direktori.index', $data);
    }
    function create()
    {
        return view('content.admin.peraturan.direktori.create');
    }
    function store()
    {
        $direktori = new Direktori();
        $direktori->nama = request('nama');
        $direktori->link = request('link');

        $direktori->save();

        return redirect('data-manager/direktori')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Direktori $direktori)
    {
        $data['direktori'] =  $direktori;
        return view('content.admin.peraturan.direktori.edit', $data);
    }
    function show($direktori)
    {
        $data['direktori'] = Direktori::find($direktori);
        return view('content.admin.peraturan.direktori.show', $data);
    }
    function update(Direktori $direktori)
    {
        $direktori->nama = request('nama');
        $direktori->link = request('link');

        $direktori->save();
        return redirect('data-manager/direktori')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Direktori $direktori)
    {
        $direktori->delete();

        return redirect('data-manager/direktori')->with('danger', 'Data Berhasil Dihapus');
    }

}
