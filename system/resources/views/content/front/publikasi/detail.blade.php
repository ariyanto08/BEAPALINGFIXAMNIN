@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            DETAIL BERITA
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url('home') }}">Home</a></span><span
                                class="page-title-content-inner">Publikasi</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <!-- main content -->
    <section class="flat-blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="166" data-mobile="0" data-smobile="0"></div>
                </div>
                <div class="col-md-8">
                    <div class="post-wrap">
                        <div class="content-blog-detail">

                            <div class="image-box">
                                <div class="image">
                                    <img src="{{ url("public/$berita->foto") }}" alt="image">
                                </div>
                            </div>
                            <div class="content mg-top-15">
                                <span class="content-info"><a href="#">
                                        Kategori: {{ $berita->kategori }}
                                    </a><a href="#" class="date">
                                        {{ $berita->created_at->format('d F Y') }}
                                    </a></span>
                                <div class="heading-content-box">
                                    <h1 style="color:var(--primary-color);">
                                        {{ $berita->nama }}
                                    </h1>
                                </div>


                                <p class="desc-content-box text-decs">
                                    {!! substr(nl2br($berita->deskripsi), 0) !!}
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- /.post-wrap -->

                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                    <div class="side-bar">
                        <div class="widgets-search">
                            <h3 class="widgets-side-bar-title">
                                Search
                            </h3>
                            <div class="widgets-input">
                                <form method="post" role="search" class="search-form" action="{{ url('berita/filter') }}">
                                    @csrf
                                    <input type="search" class="search-field" placeholder="Cari berita..."
                                        value="{{ $nama ?? '' }}" name="nama">
                                    <button class="search-submit" type="submit" title="Search"></button>
                                </form>
                            </div>
                        </div>
                        <div class="widgets-category">
                            <h3 class="widgets-side-bar-title">
                                Menu Utama
                            </h3>
                            <ul class="list-category">
                                <li><a href="https://www.beacukai.go.id/pengaduan.html"><i class="fa fa-comments"
                                            aria-hidden="true"></i> Pengaduan</a></li>
                                <li><a href="https://www.beacukai.go.id/kurs.html"><i class="fa fa-line-chart"
                                            aria-hidden="true"></i>Kurs Pajak </a>
                                </li>
                                <li><a href="https://www.beacukai.go.id/barangkiriman"><i class="fa fa-location-arrow"
                                            aria-hidden="true"></i>Tinjau Barang Kiriman </a></li>
                                <li><a href="https://www.beacukai.go.id/register-imei.html"><i class="fa fa-barcode"
                                            aria-hidden="true"></i>Registasi IMEI </a></li>

                            </ul>
                        </div>
                        <div class="widget widget_lastest">
                            <h2 class="widgets-side-bar-title"><span>Recent News</span></h2>
                            <ul class="lastest-posts data-effect clearfix">
                                @foreach ($recent_berita as $berita)
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <img src="{{ url("public/$berita->foto") }}" alt="Image">
                                        </div>
                                        <div class="text">
                                            <h3><a href={{ url('berita/detail', $berita->id) }}"
                                                    class="title-thumb">{{ $berita->nama }}</a></h3>
                                            <a href="#" class="date">{{ $berita->created_at->format('d F Y') }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.widget_lastest -->
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="193" data-mobile="60" data-smobile="60"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
