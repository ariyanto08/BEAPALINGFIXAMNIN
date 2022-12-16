@extends('template.super-admin')

@section('content')
<a href="{{url('master-data/user')}}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Operator</h4>
            </div>
            <div class="card-body">
                <form action="{{url('master-data/user',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" value="{{$user->nip}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning float-end mt-3"><i class="bx bx-save"></i>Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
