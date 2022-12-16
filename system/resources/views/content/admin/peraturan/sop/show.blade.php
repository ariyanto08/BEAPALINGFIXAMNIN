@extends('template.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <a href="{{ url('data-manager/sop') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
            <div class="card">
                <div class="card-header">
                    Detail SOP
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <h5>{{ $sop->nama }}</h5>
                        <hr>
                        <p>
                            {{ $sop->link }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
