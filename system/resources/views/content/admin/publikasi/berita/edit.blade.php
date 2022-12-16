@extends ('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/berita') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url("public/$berita->foto") }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Data Berita
                    </div>
                    <div class="card-body">
                        <form action="{{ url('data-manager/berita', $berita->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="nama" value="{{ $berita->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="{{ $berita->kategori }}">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept="png,jpg,svg" value="{{ url('public',$berita->foto) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $berita->deskripsi }}</textarea>
                            </div>
                            <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"></i> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
