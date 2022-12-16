<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Komposisi;

class KomposisiController extends Controller{

    function index(){
        $data['jabatan'] = Komposisi::where('level','jabatan')->get();
        $data['usia'] = Komposisi::where('level','usia')->get();
        $data['jenis_kelamin'] = Komposisi::where('level','jenis_kelamin')->get();
        $data['pendidikan'] = Komposisi::where('level','pendidikan')->get();
        return view('content.admin.profil-web.komposisi.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.komposisi.create');
    }
    function store()
    {
        $komposisi = new Komposisi();
        $komposisi->level = request('level');
        $komposisi->nama = request('nama');
        $komposisi->jumlah = request('jumlah');
        $komposisi->save();

        return redirect('data-manager/komposisi')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Komposisi $komposisi)
    {
        $data['komposisi'] =  $komposisi;
        return view('content.admin.profil-web.komposisi.edit', $data);
    }
    function show($Komposisi)
    {
        $data['komposisi'] = Komposisi::find($Komposisi);
        return view('content.admin.profil-web.komposisi.show', $data);
    }
    function update(Komposisi $komposisi)
    {
        $komposisi->level = request('level');
        $komposisi->nama = request('nama');
        $komposisi->jumlah = request('jumlah');
        $komposisi->save();

        return redirect('data-manager/komposisi')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Komposisi $komposisi)
    {
        $komposisi->delete();

        return redirect('data-manager/komposisi')->with('danger', 'Data Berhasil Dihapus');
    }

}
