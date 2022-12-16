<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Visi;

class VisiController extends Controller{

    function index(){
        $data['visi'] = Visi::where('level','Visi')->get();
        $data['misi'] = Visi::where('level','Misi')->get();
        $data['motto'] = Visi::where('level','Motto')->get();
        return view('content.admin.profil-web.visi.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.visi.create');
    }
    function store()
    {
        $visi = new Visi();
        $visi->level = request('level');
        $visi->deskripsi = request('deskripsi');
        $visi->save();

        return redirect('data-manager/visi')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Visi $visi)
    {
        $data['visi'] =  $visi;
        return view('content.admin.profil-web.visi.edit', $data);
    }
    function show($visi)
    {
        $data['visi'] = Visi::find($visi);
        return view('content.admin.profil-web.visi.show', $data);
    }
    function update(Visi $visi)
    {
        $visi->level = request('level');
        $visi->deskripsi = request('deskripsi');
        $visi->save();

        return redirect('data-manager/visi')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Visi $visi)
    {
        $visi->delete();

        return redirect('data-manager/visi')->with('danger', 'Data Berhasil Dihapus');
    }

}
