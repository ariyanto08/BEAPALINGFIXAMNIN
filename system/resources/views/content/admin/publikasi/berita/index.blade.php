@extends('template.admin')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Data berita</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ url('data-manager/berita/create') }}" class="btn btn-light" data-bs-toggle="modal"
                    data-bs-target="#exampleExtraLargeModal"><i class="bx bx-plus me-1"></i>
                    Add New Berita</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="berita row row-cols-2 row-cols-md-4">
                    @foreach ($list_berita as $berita)
                    <div class="col mb-4 pl-2 pr-2">
                        <div class="card">
                            <img src="{{ url("public/$berita->foto") }}" class="image-fluid" alt="">
                            <div class="card-body">
                                <a href="{{ url('data-manager/berita', $berita->id) }}"><h5>{{ $berita->nama }}</h5></a>
                                <p>{{ $berita->created_at->format("d F Y") }}</p>
                                <span>Kategori: {{ $berita->kategori }}</span>
                                <div class="float-end">
                                    <div class="btn-group">
                                        <a href="{{ url('data-manager/berita', $berita->id) }}/edit" class="btn btn-warning"
                                            title="Edit"><i class="bx bx-edit"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        @include('utils.delete', [
                                            'url' => url('data-manager/berita', $berita->id),
                                        ])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    <!-- Modal Create-->
    <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-labelledby="exampleExtraLargeModal"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleExtraLargeModal">Add New berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('data-manager/berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-grup">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Gambar (770x450)px</label>
                                    <input type="file" class="form-control" name="foto" accept="png,jpg,svg">
                                </div>
                            </div>
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
