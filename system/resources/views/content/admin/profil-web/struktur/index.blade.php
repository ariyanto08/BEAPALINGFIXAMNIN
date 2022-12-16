@extends('template.admin')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Struktur Organisasi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Data Struktur Organisasi</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ url('data-manager/struktur/create') }}" class="btn btn-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bx bx-plus me-1"></i>
                    Add New Struktur</a>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 product-grid">
        @foreach ($list_struktur as $struktur)
            <div class="col">
                <div class="card">
                    <img src="{{ url("public/$struktur->gambar") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">{{ $struktur->nama }}</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start">{{ $struktur->created_at->format('d F Y') }}</p>
                            <div class="float-end">
                                <div class="btn-group">
                                    <a href="{{ url('data-manager/struktur', $struktur->id) }}/edit" class="btn btn-warning"
                                        title="Edit"><i class="bx bx-edit"></i></a>
                                </div>
                                <div class="btn-group">
                                    @include('utils.delete', [
                                        'url' => url('data-manager/struktur', $struktur->id),
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--end row-->

    <!-- Modal Create-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Struktur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('data-manager/struktur') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" accept="png,jpg,svg">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
