@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            FAQ
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url('home') }}">Home</a></span><span
                                class="page-title-content-inner">Peraturan</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <!-- main content -->
    <section class="flat-blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="post-wrap">
                        <article class="article-1">
                            <div class="content-box">
                                <div class="content-art">
                                    <h5 class="section-title has-text-align-center">
                                        FAQ
                                    </h5>
                                    <hr>

                                    <div class="flat-accordion">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Registrasi dan Aplikasi Kepabeanan</h3>
                                            @foreach ($registrasi_apk as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Barang Kiriman</h3>
                                            @foreach ($barang_Kiriman as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Barang Penumpang dan Pelintas Batas</h3>
                                            @foreach ($barang_penumpang as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Registrasi IMEI</h3>
                                            @foreach ($registrasi_imei as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Impor</h3>
                                            @foreach ($impor as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Ekspor</h3>
                                            @foreach ($ekspor as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Cukai</h3>
                                            @foreach ($cukai as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Pengangkutan</h3>
                                            @foreach ($pengangkutan as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Penipuan</h3>
                                            @foreach ($penipuan as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Pengaduan</h3>
                                            @foreach ($pengaduan as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flat-accordion" style="margin-top: 12px">
                                        <div class="flat-toggle text-pri2-color">
                                            <h3 class="section-heading-jost-size21" style="margin-bottom: 12px;">
                                                - Informasi</h3>
                                            @foreach ($informasi as $faq)
                                                <h6 class="toggle-title section-heading-rubik-size16 fw-500">
                                                    {{ $faq->pertanyaan }}</h6>
                                                <div class="toggle-content section-desc" style="display: none;">
                                                    <p>{{ $faq->jawaban }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </article>
                        <!-- end art1-->
                        <!-- end pagination-->
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60">
                    </div>
                    <div class="side-bar">
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
                        <!-- /.widget_lastest -->
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
        </div> <!-- /.container -->
    </section><!-- /flat-blog -->
@endsection
