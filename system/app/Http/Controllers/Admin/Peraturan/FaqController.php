<?php

namespace App\Http\Controllers\Admin\Peraturan;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller{

    function index(){
        $data['list_faq'] = Faq::all();
        return view('content.admin.peraturan.faq.index', $data);
    }
    function create()
    {
        return view('content.admin.peraturan.faq.create');
    }
    function store()
    {
        $faq = new Faq();
        $faq->pertanyaan = request('pertanyaan');
        $faq->jawaban = request('jawaban');
        $faq->kategori = request('kategori');
        $faq->save();

        return redirect('data-manager/faq')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Faq $faq)
    {
        $data['faq'] =  $faq;
        return view('content.admin.peraturan.faq.edit', $data);
    }
    function show($faq)
    {
        $data['faq'] = Faq::find($faq);
        return view('content.admin.peraturan.faq.show', $data);
    }
    function update(Faq $faq)
    {
        $faq->pertanyaan = request('pertanyaan');
        $faq->jawaban = request('jawaban');
        $faq->kategori = request('kategori');
        $faq->save();
        return redirect('data-manager/faq')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect('data-manager/faq')->with('danger', 'Data Berhasil Dihapus');
    }

}
