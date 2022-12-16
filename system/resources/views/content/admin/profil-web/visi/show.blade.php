@extends('template.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <a href="{{ url('data-manager/visi') }}" class="btn btn-warning btn-sm"><i class="bx bx-chevron-left-circle"></i>
                Kembali</a>
            <hr>
            <div class="text-center">
                <h5 class="mb-0 text-uppercase">Detail Visi Misi Dan Motto</h5>
                <hr />
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <p>
                                    {!! nl2br($visi->deskripsi) !!}
                                </p>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
