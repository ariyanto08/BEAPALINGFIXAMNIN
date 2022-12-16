@extends('template.admin')

@section('content')
    <div class="container">
        <a href="{{ url('data-manager/berita') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ url("public/$berita->foto") }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Detail Data Berita
                        </div>
                        <div class="card-body">
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h3>{{ $berita->nama }}</h3>
                                    {{-- <h6>Penulis  : {{ $berita->penulis }}</h6> --}}
                                    <h6>Kategori : {{ $berita->kategori}}</h6>
                                    <hr>
                                    <p>Deskripsi : <br>
                                        {!! nl2br($berita->deskripsi) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
