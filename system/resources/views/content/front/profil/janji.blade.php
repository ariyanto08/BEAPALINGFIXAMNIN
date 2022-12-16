@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            JANJI LAYANAN
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url('home') }}">Home</a></span><span
                                class="page-title-content-inner">Profil</span>
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
                                        JANJI LAYANAN
                                    </h5>
                                    <hr>
                                </div>
                                <div class="image-box">
                                    @foreach ($list_janji as $janji)
                                        <div class="image">
                                            <img src="{{ url("public/$janji->gambar") }}" alt="image">
                                        </div>
                                    @endforeach
                                    <p style="color:BLACK ;">Catatan: <br>

                                        Semua layanan tidak dipungut biaya <br>
                                        Pelayanan yang output-nya berupa perizinan (Surat Izin/Keputusan), diatur
                                        pembagian waktu sebagai berikut: <br>
                                        Permohonan yang masuk sebelum pukul 14.00 WIB, hitungan waktu pelayanan
                                        terhitung mulai hari itu juga.Permohonan yang masuk setelah pukul 14.00 WIB,
                                        hitungan waktu pelayanan
                                        terhitung mulai hari kerja berikutnya. <br>
                                        Pelayanan lainnya, diatur pembagian waktu sebagai berikut: <br>
                                        Permohonan yang masuk sebelum pukul 15.00 WIB, hitungan waktu pelayanan
                                        terhitung mulai hari itu juga.
                                        Permohonan yang masuk setelah pukul 15.00 WIB, hitungan waktu pelayanan
                                        terhitung mulai hari kerja berikutnya.</p>
                                </div>
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
    </section>
@endsection
