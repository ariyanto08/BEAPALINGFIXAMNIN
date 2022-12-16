<?php

namespace App\Http\Controllers\Client\Peraturan;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use App\Models\Faq;
use App\Models\Direktori;

class SopwebController extends Controller
{
    function showSop()

    {
        $data['list_direktori'] = Direktori::all();
        $data['list_sop'] = Sop::all();
        return view('content.front.peraturan.sop', $data);
    }
    function showFaq()

    {
        $data['list_direktori'] = Direktori::all();
        $data['registrasi_apk'] = Faq::where('kategori', 'Registrasi dan Aplikasi Kepabeanan')->get();
        $data['barang_Kiriman'] = Faq::where('kategori', 'Barang Kiriman')->get();
        $data['barang_penumpang'] = Faq::where('kategori', 'Barang Penumpang dan Pelintas Batas')->get();
        $data['registrasi_imei'] = Faq::where('kategori', 'Registrasi IMEI')->get();
        $data['impor'] = Faq::where('kategori', 'Impor')->get();
        $data['ekspor'] = Faq::where('kategori', 'Ekspor')->get();
        $data['cukai'] = Faq::where('kategori', 'Cukai')->get();
        $data['pengangkutan'] = Faq::where('kategori', 'Pengangkutan')->get();
        $data['penipuan'] = Faq::where('kategori', 'Penipuan')->get();
        $data['pengaduan'] = Faq::where('kategori', 'Pengaduan')->get();
        $data['informasi'] = Faq::where('kategori', 'Informasi')->get();
        return view('content.front.peraturan.faq', $data);
    }
}
