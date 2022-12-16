@extends('template.super-admin')

@section('content')
<a href="{{url('master-data/user')}}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Data Operasional</h4>
                </div>
                <div class="card-body">
                    <p>
                        Nama : {{ $user->nama }}
                    </p>
                    <p>
                        NIP : {{ $user->nip }}
                    </p>
                    <p>
                        Email : {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

