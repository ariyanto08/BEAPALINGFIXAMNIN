@extends ('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/faq') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data FAQ
                    </div>
                    <div class="card-body">
                        <form action="{{ url('data-manager/faq', $faq->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="input-group mb-3">
                                <label class="input-group-text">Kategori</label>
                                <select class="form-select" name="kategori">
                                    <option selected>{{ $faq->kategori }}</option>
                                    <option value="Registrasi dan Aplikasi Kepabeanan">Registrasi dan Aplikasi Kepabeanan</option>
                                    <option value="Barang Kiriman">Barang Kiriman</option>
                                    <option value="Barang Penumpang dan Pelintas Batas">Barang Penumpang dan Pelintas Batas</option>
                                    <option value="Registrasi IMEI">Registrasi IMEI</option>
                                    <option value="Impor">Impor</option>
                                    <option value="Ekspor">Ekspor</option>
                                    <option value="Cukai">Cukai</option>
                                    <option value="Pengangkutan dan Manifes">Pengangkutan dan Manifes</option>
                                    <option value="Penipuan">Penipuan</option>
                                    <option value="Pengaduan">Pengaduan</option>
                                    <option value="Informasi Lainnya">Informasi Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" value="{{ $faq->pertanyaan }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jawaban</label>
                                <textarea name="jawaban" class="form-control">{{ $faq->jawaban }}</textarea>
                            </div>
                            <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
