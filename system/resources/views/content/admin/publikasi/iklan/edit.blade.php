@extends ('template.admin')

@section('content')
<a href="{{ url('data-manager/iklan') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
<div class="card">
    <div class="row g-0">
        <div class="col-md-4 border-end">
            <img src="{{ url("public/$iklan->foto") }}" class="img-fluid" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <form action="{{ url('data-manager/iklan', $iklan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grup">
                                <label for="" class="control-label">Foto</label>
                                <input type="file" class="form-control" name="foto" accept="png,jpg,svg">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $iklan->deskripsi }}">
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
