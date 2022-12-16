@extends('template.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Komposisi Pegawai</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Daftar Komposisi Pegawai</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto mt-4">
            <div class="btn-group">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample"><i class="bx bx-plus me-1"></i>
                    Add New Komposisi Pegawai</a>
            </div>
        </div>
    </div>
    <hr>
    <!-- Collapse Create-->
    <div class="col-12">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="{{ url('data-manager/komposisi') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                        <select class="form-select" id="inputGroupSelect01" name="level">
                            <option selected>Pilih...</option>
                            <option value="jabatan">Jabatan</option>
                            <option value="usia">Usia</option>
                            <option value="jenis_kelamin">Jenis Kelamin</option>
                            <option value="pendidikan">Pendidikan</option>
                        </select>
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Keterangan</label>
                        <input name="nama" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="" class="control-label">Jumlah</label>
                        <input name="jumlah" class="form-control">
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="header">
                <h4>Berdasarkan Jabatan</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatan as $jabatan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jabatan->nama }}</td>
                                        <td>{{ $jabatan->jumlah }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/komposisi', $jabatan->id) }}/edit"
                                                    class="btn btn-warning" title="Edit"><i
                                                        class="bx bx-edit"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                @include('utils.delete', [
                                                    'url' => url('data-manager/komposisi', $jabatan->id),
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
                <h4>Berdasarkan Usia</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Usia</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usia as $usia)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $usia->nama }}</td>
                                        <td>{{ $usia->jumlah }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/komposisi', $usia->id) }}/edit"
                                                    class="btn btn-warning" title="Edit"><i
                                                        class="bx bx-edit"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                @include('utils.delete', [
                                                    'url' => url('data-manager/komposisi', $usia->id),
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
    <div class="row">
        <div class="col-md-6">
            <div class="header">
                <h4>Berdasarkan Jenis Kelamin</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis_kelamin as $jenis_kelamin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jenis_kelamin->nama }}</td>
                                        <td>{{ $jenis_kelamin->jumlah }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/komposisi', $jenis_kelamin->id) }}/edit"
                                                    class="btn btn-warning" title="Edit"><i class="bx bx-edit"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                @include('utils.delete', [
                                                    'url' => url('data-manager/komposisi', $jenis_kelamin->id),
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
                <h4>Berdasarkan Pendidikan</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pendidikan</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendidikan as $pendidikan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pendidikan->nama }}</td>
                                        <td>{{ $pendidikan->jumlah }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('data-manager/komposisi', $pendidikan->id) }}/edit"
                                                    class="btn btn-warning" title="Edit"><i class="bx bx-edit"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                @include('utils.delete', [
                                                    'url' => url('data-manager/komposisi', $pendidikan->id),
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
@endsection
