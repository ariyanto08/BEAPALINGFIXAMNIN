@extends('template.admin')

@section('content')
    <div class="align-item-center mb-3 d-sm-flex">
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ url('data-manager/diagram/create') }}" class="btn btn-light"><i class="bx bx-plus me-1"></i>
                    Add New Data Diagram</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($list_diagram as $diagram)
            <div class="col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header">
                        <div>
                            <h5 class="mb-2 mt-3">{{ $diagram->nama }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <img src="{{ url("public/$diagram->gambar") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-1">Bea Keluar</p>
                                <h4 class="mb-0">{{ $diagram->persentase_keluar }}%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13">Target : {{ $diagram->target_keluar_string }}</p>
                                <p class="mb-0 font-13 text-white">Realisasi : {{ $diagram->realisasi_keluar_string }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-1">Bea Masuk</p>
                                <h4 class="mb-0">{{ $diagram->persentase_masuk }}%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13">Target : {{ $diagram->target_masuk_string }}</p>
                                <p class="mb-0 font-13 text-white">Realisasi : {{ $diagram->realisasi_masuk_string }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-1">Cukai</p>
                                <h4 class="mb-0">{{ $diagram->persentase_cukai }}%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13">Target : {{ $diagram->target_cukai_string }}</p>
                                <p class="mb-0 font-13 text-white">Realisasi : {{ $diagram->realisasi_cukai_string }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="overflow-hidden">
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('data-manager/diagram', $diagram->id) }}/edit" class="btn btn-warning"
                                    title="Edit"><i class="bx bx-edit"></i></a>
                            </div>
                            <div class="btn-group">
                                @include('utils.delete', [
                                    'url' => url('data-manager/diagram', $diagram->id),
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
