@extends('template.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Visi Misi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Daftar Visi Misi</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto mt-4">
            <div class="btn-group">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample"><i class="bx bx-plus me-1"></i>
                    Add New Visi Misi</a>
            </div>
        </div>
    </div>
    <!-- Collapse Create-->
    <div class="col-12">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{ url('data-manager/visi') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01" name="level">
                            <option selected>Choose...</option>
                            <option value="Visi">Visi</option>
                            <option value="Misi">Misi</option>
                            <option value="Motto">Motto</option>
                        </select>
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Isi</label>
                        <textarea id="mytextarea" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="header">
                    <h4>Visi</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Visi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visi as $visi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{!! substr(nl2br($visi->deskripsi), 0, 40) !!}...</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $visi->id) }}" class="btn btn-info"
                                                        title="Show"><i class="bx bx-detail"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $visi->id) }}/edit"
                                                        class="btn btn-warning" title="Edit"><i
                                                            class="bx bx-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('data-manager/visi', $visi->id),
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
            <div class="col-md-6">
                <div class="header">
                    <h4>Misi</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($misi as $misi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{!! substr(nl2br($misi->deskripsi), 0, 40) !!}...</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $misi->id) }}" class="btn btn-info"
                                                        title="Show"><i class="bx bx-detail"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $misi->id) }}/edit"
                                                        class="btn btn-warning" title="Edit"><i
                                                            class="bx bx-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('data-manager/visi', $misi->id),
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
            <div class="col">
                <div class="header">
                    <h4>Motto</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Motto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motto as $motto)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{!! substr(nl2br($motto->deskripsi), 0, 70) !!}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $motto->id) }}"
                                                        class="btn btn-info" title="Show"><i class="bx bx-detail"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('data-manager/visi', $motto->id) }}/edit"
                                                        class="btn btn-warning" title="Edit"><i
                                                            class="bx bx-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('data-manager/visi', $motto->id),
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
        </div>
    </div>
@endsection
