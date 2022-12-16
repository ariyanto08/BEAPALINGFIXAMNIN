@extends('template.admin')

@section('content')
<a href="{{ url('data-manager/diagram') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
<div class="row">
    <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase text-center">Add New Data Diagram</h6>
            <hr />
            <form action="{{ url('data-manager/diagram', $diagram->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <label class="form-label">Keterangan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Keterangan" aria-label="Keterangan"
                                    name="nama" value="{{ $diagram->nama }}">
                            </div>
                            <label class="form-label">Gambar</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="gambar"
                                    accept="png,jpg,svg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Bea Masuk</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Persentase Bea Masuk</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Persentase Masuk" name="persentase_masuk" value="{{ $diagram->persentase_masuk }}">
                                </div>
                                <label class="form-label">Target Bea Masuk</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Target Masuk" name="target_masuk" value="{{ $diagram->target_masuk }}">
                                </div>
                                <label class="form-label">Realisasi Bea Masuk</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Realisasi Masuk" name="realisasi_masuk" value="{{ $diagram->realisasi_masuk }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Bea Keluar</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Persentase Bea Keluar</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Persentase Keluar" name="persentase_keluar" value="{{ $diagram->persentase_keluar }}">
                                </div>
                                <label class="form-label">Target Bea Keluar</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Target Keluar" name="target_keluar" value="{{ $diagram->target_keluar }}">
                                </div>
                                <label class="form-label">Realisasi bea Keluar</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Realisasi Keluar" name="realisasi_keluar" value="{{ $diagram->realisasi_keluar }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h6 class="mb-0 text-uppercase">Cukai</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Persentase Cukai</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Persentase Cukai" name="persentase_cukai" value="{{ $diagram->persentase_cukai }}">
                                </div>
                                <label class="form-label">Target Cukai</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Target Cukai" name="target_cukai" value="{{ $diagram->target_cukai }}">
                                </div>
                                <label class="form-label">Realisasi Cukai</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Realisasi Cukai" name="realisasi_cukai" value="{{ $diagram->realisasi_cukai }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm btn-warning float-end mt-0 mb-4"><i class="bx bx-save"> Save</i></button>
            </form>
        </div>
    </div>
@endsection
