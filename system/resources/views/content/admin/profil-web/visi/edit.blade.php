@extends('template.admin')
@section('content')
<div class="container">
    <a href="{{ url('data-manager/visi') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{ url('data-manager/visi', $visi->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Isi</label>
                            <textarea name="deskripsi" class="form-control">{{ $visi->deskripsi }}</textarea>
                        </div>
                        <button class="btn-warning float-end btn btn-sm mt-3"><i class="bx bx-save"></i> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
