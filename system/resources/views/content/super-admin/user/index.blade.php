@extends('template.super-admin')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Daftar Pengguna</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Data User Admin Dan Operasional</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="#collapseExample" class="btn btn-light" data-bs-toggle="collapse"><i
                        class="bx bx-user-plus me-1"></i>
                    Add New User</a>
            </div>
        </div>
    </div>
    {{-- Collapse Create --}}
    <div class="col-12">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{ url('master-data/user') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Peran</label>
                        <select class="form-select" id="inputGroupSelect01" name="level">
                            <option selected>Pilih Sebagai...</option>
                            <option value="1">Admin</option>
                            <option value="2">Operational</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">NIP</label>
                        <input type="nip" class="form-control" name="nip">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="header">
                    <h4>User Admin</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Peran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admin as $admin)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $admin->nama }}</td>
                                            <td>{{ $admin->nip }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>{{ $admin->level_string }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('master-data/user', $admin->id) }}" class="btn btn-info"
                                                        title="Info"><i class="bx bx-detail"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('master-data/user', $admin->id) }}/edit"
                                                        class="btn btn-warning" title="Edit"><i
                                                            class="bx bx-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('master-data/user', $admin->id),
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
                    <h4>User Operasional</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Peran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operasional as $operasional)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $operasional->nama }}</td>
                                            <td>{{ $operasional->nip }}</td>
                                            <td>{{ $operasional->email }}</td>
                                            <td>{{ $operasional->level_string }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('master-data/user', $operasional->id) }}"
                                                        class="btn btn-info" title="Info"><i class="bx bx-detail"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('master-data/user', $operasional->id) }}/edit"
                                                        class="btn btn-warning" title="Edit"><i
                                                            class="bx bx-edit"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('master-data/user', $operasional->id),
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
