@extends('template.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Data Direktori</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item active" aria-current="page">Daftar Direktori</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ url('data-manager/direktori/create') }}" class="btn btn-light" data-bs-toggle="modal"
                data-bs-target="#exampleExtraLargeModal"><i class="bx bx-plus me-1"></i>
                Add New Direktori</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_direktori as $direktori)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $direktori->nama}}</td>
                                <td>{{ $direktori->link}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('data-manager/direktori', $direktori->id) }}" class="btn btn-info"
                                            title="Show"><i class="bx bx-detail"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="{{ url('data-manager/direktori', $direktori->id) }}/edit"
                                            class="btn btn-warning" title="Edit"><i
                                                class="bx bx-edit"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        @include('utils.delete', [
                                            'url' => url('data-manager/direktori', $direktori->id),
                                        ])
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-labelledby="exampleExtraLargeModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleExtraLargeModal">Add New Direktori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('data-manager/direktori') }}" method="post">
                    @csrf
                    <div class="form-grup">
                        <label for="" class="control-label">Keterangan</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
