<?php

namespace App\Http\Controllers\Admin\Diagram;
use App\Http\Controllers\Controller;
use App\Models\Diagram;

class DiagramController extends Controller{

    function index(){
        $data['list_diagram'] = Diagram::all();
        return view('content.admin.diagram.index', $data);
    }
    function create()
    {
        return view('content.admin.diagram.create');
    }

    function store()
    {
        $diagram = new Diagram();
        $diagram->nama = request('nama');
        $diagram->persentase_masuk = request('persentase_masuk');
        $diagram->persentase_keluar = request('persentase_keluar');
        $diagram->persentase_cukai = request('persentase_cukai');
        $diagram->target_masuk = request('target_masuk');
        $diagram->target_keluar = request('target_keluar');
        $diagram->target_cukai = request('target_cukai');
        $diagram->realisasi_masuk = request('realisasi_masuk');
        $diagram->realisasi_keluar = request('realisasi_keluar');
        $diagram->realisasi_cukai = request('realisasi_cukai');
        $diagram->save();
        $diagram->handleUploadFoto();

        return redirect('data-manager/diagram')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Diagram $diagram)
    {
        $data['diagram'] =  $diagram;
        return view('content.admin.diagram.edit', $data);
    }
    function show($diagram)
    {
        $data['diagram'] = Diagram::find($diagram);
        return view('content.admin.diagram.show', $data);
    }
    function update(Diagram $diagram)
    {
        $diagram->nama = request('nama');
        $diagram->persentase_masuk = request('persentase_masuk');
        $diagram->persentase_keluar = request('persentase_keluar');
        $diagram->persentase_cukai = request('persentase_cukai');
        $diagram->target_masuk = request('target_masuk');
        $diagram->target_keluar = request('target_keluar');
        $diagram->target_cukai = request('target_cukai');
        $diagram->realisasi_masuk = request('realisasi_masuk');
        $diagram->realisasi_keluar = request('realisasi_keluar');
        $diagram->realisasi_cukai = request('realisasi_cukai');
        $diagram->save();
        if (request('gambar')) $diagram->handleUploadFoto();

        return redirect('data-manager/diagram')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Diagram $diagram)
    {
        $diagram->delete();
        $diagram->handleDelete();

        return redirect('data-manager/diagram')->with('danger', 'Data Berhasil Dihapus');
    }

}
