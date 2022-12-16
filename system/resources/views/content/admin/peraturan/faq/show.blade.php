@extends ('template.admin')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <a href="{{ url('data-manager/faq') }}" class="btn btn-warning btn-sm"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
            <hr>
            <div class="text-center">
                <h5 class="mb-0 text-uppercase">Detail Pertanyaan</h5>
                <hr />
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <p class="accordion-button">
                                    {{ $faq->pertanyaan }}
                                </p>
                            </h2>
                            <div class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>{{ $faq->jawaban}}</p>
                                    <p><strong>Kategori: </strong>{{ $faq->kategori }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
