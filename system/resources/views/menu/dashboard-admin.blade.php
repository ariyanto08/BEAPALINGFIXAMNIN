@extends('template.admin')

@section('content')
    <div class="row row-cols-1 row-cols-md-3">
        <a href="{{ url('data-manager/berita') }}">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bx-news'></i>
                            </div>
                            <h4 class="my-1">{{ $berita }}</h4>
                            <p class="mb-0">Berita</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ url('data-manager/iklan') }}">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bx-slideshow'></i>
                            </div>
                            <h4 class="my-1">{{ $iklan }}</h4>
                            <p class="mb-0">Iklan</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ url('data-manager/video') }}">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="widgets-icons rounded-circle mx-auto mb-3"><i class='bx bxl-youtube'></i>
                            </div>
                            <h4 class="my-1">{{ $video }}</h4>
                            <p class="mb-0">Video Youtube</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection
