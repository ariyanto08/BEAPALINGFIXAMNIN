@extends('template.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Janji Layanan</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Daftar Janji</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto mt-4">
            <div class="btn-group">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample"><i class="bx bx-plus me-1"></i>
                    Add New Janji</a>
            </div>
        </div>
    </div>
    <!-- Collapse Create-->
    <div class="col-12">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{ url('data-manager/janji') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup">
                        <label for="" class="control-label">Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="nama">
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" accept="png,jpg,svg">
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 product-grid">
        @foreach ($list_janji as $janji)
            <div class="col">
                <div class="card">
                    <img src="{{ url('public', $janji->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">{{ $janji->nama }}</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start">{{ $janji->created_at->format('d F Y') }}</p>
                            <div class="float-end">
                                <div class="btn-group">
                                    <a href="{{ url('data-manager/janji', $janji->id) }}/edit" class="btn btn-warning"
                                        title="Edit"><i class="bx bx-edit"></i></a>
                                </div>
                                <div class="btn-group">
                                    @include('utils.delete', [
                                        'url' => url('data-manager/janji', $janji->id),
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
