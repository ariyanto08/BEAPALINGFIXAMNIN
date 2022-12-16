<?php

namespace App\Http\Controllers\Admin\Peraturan;
use App\Http\Controllers\Controller;
use App\Models\Sop;

class SopController extends Controller{

    function index(){
        $data['list_sop'] = Sop::all();
        return view('content.admin.peraturan.sop.index', $data);
    }
    function create()
    {
        return view('content.admin.peraturan.sop.create');
    }
    function store()
    {
        $sop = new Sop();
        $sop->nama = request('nama');
        $sop->link = request('link');

        $sop->save();

        return redirect('data-manager/sop')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Sop $sop)
    {
        $data['sop'] =  $sop;
        return view('content.admin.peraturan.sop.edit', $data);
    }
    function show($sop)
    {
        $data['sop'] = Sop::find($sop);
        return view('content.admin.peraturan.sop.show', $data);
    }
    function update(Sop $sop)
    {
        $sop->nama = request('nama');
        $sop->link = request('link');

        $sop->save();
        return redirect('data-manager/sop')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Sop $sop)
    {
        $sop->delete();

        return redirect('data-manager/sop')->with('danger', 'Data Berhasil Dihapus');
    }

}
