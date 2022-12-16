@extends('template.admin')

@section('content')
<a href="{{ url('data-manager/struktur') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 border-end">
                <img src="{{ url("public/$struktur->gambar") }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form action="{{ url('data-manager/struktur', $struktur->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $struktur->nama }}">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" accept="png,jpg,svg">
                                </div>
                            </div>
                        </div>
                        <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
