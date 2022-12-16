<?php

namespace App\Http\Controllers\Admin\Publikasi;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{

    function index()
    {
        $data['list_video'] = Video::all();
        return view('content.admin.publikasi.video.index', $data);
    }
    function create()
    {
        return view('content.admin.publikasi.video.create');
    }
    function store()
    {
        $video = new Video();
        $video->link = request('link');
        $video->save();

        return redirect('data-manager/video')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Video $video)
    {
        $data['video'] =  $video;
        return view('content.admin.publikasi.video.edit', $data);
    }
    function show($video)
    {
        $data['video'] = Video::find($video);
        return view('content.admin.publikasi.video.show', $data);
    }
    function update(Video $video)
    {
        $video->link = request('link');
        $video->save();
        return redirect('data-manager/video')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Video $video)
    {
        $video->delete();

        return redirect('data-manager/video')->with('danger', 'Data Berhasil Dihapus');
    }

}
