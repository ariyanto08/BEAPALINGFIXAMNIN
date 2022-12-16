<?php

namespace App\Http\Controllers\Admin\Profilweb;
use App\Http\Controllers\Controller;
use App\Models\Profil;

class ProfilController extends Controller
{

    function index()
    {
        $data['list_profil'] = Profil::all();
        return view('content.admin.profil-web.profil.index', $data);
    }
    function create()
    {
        return view('content.admin.profil-web.profil.create');
    }
    function store()
    {
        $profil = new Profil();
        $profil->link = request('link');
        $profil->save();

        return redirect('data-manager/profil')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Profil $profil)
    {
        $data['profil'] =  $profil;
        return view('content.admin.profil-web.profil.edit', $data);
    }
    function show($profil)
    {
        $data['profil'] = Profil::find($profil);
        return view('content.admin.profil-web.profil.show', $data);
    }
    function update(Profil $profil)
    {
        $profil->link = request('link');
        $profil->save();
        return redirect('data-manager/profil')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Profil $profil)
    {
        $profil->delete();

        return redirect('data-manager/profil')->with('danger', 'Data Berhasil Dihapus');
    }

}
