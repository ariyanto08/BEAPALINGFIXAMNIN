@extends('template.admin')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Video</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Data video</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ url('data-manager/video/create') }}" class="btn btn-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bx bx-plus me-1"></i>
                    Add New Video</a>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 product-grid">
        @foreach ($list_video as $video)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <iframe height="270" class="card-img-top"src="{{ $video->link }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <p class="mb-0 float-start">{{ $video->created_at->format('d F Y') }}</p>
                        <div class="float-end">
                            <div class="btn-group">
                                @include('utils.delete', [
                                    'url' => url('data-manager/video', $video->id),
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Modal Create-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('data-manager/video') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Link</label>
                                    <input type="text" class="form-control" name="link">
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
