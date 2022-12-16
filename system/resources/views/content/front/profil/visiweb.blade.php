@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            VISI,MISI,MOTO
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
                                    <h6 class="section-title text-center">
                                        Visi-Misi DJBC
                                    </h6>
                                    <hr>
                                    <h2 class=" text-center"
                                        style="font-size: 30px;color: black; font-family: 'Jost', sans-serif;">
                                        VISI
                                    </h2>
                                    <br>
                                    @foreach ($visi as $visi)
                                        <h5 class=" text-center" style="color: black; font-family: 'Jost', sans-serif;">
                                            {!! nl2br($visi->deskripsi) !!}</h5>
                                    @endforeach
                                </div>
                                <br>
                                <div class="content-art">
                                    <h2 class=" text-center"
                                        style="font-size: 30px;color: black; font-family: 'Jost', sans-serif;">
                                        MISI
                                    </h2>
                                    <br>
                                    @foreach ($misi as $misi)
                                        <div class=" text-center" style="color: black; font-weight: bold; font-family: 'Jost', sans-serif;">
                                            {!! nl2br($misi->deskripsi) !!}
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                                <div class="content-art">
                                    <h2 class=" text-center"
                                        style="font-size: 30px;color: black; font-family: 'Jost', sans-serif;">
                                        MOTTO
                                    </h2>
                                    <br>
                                    @foreach ($motto as $motto)
                                        <p class="desc-content-box text-decs text-center"
                                            style="color: black; font-weight: bold; font-family: 'Jost', sans-serif;">
                                            {!! nl2br($motto->deskripsi) !!}
                                        </p>
                                    @endforeach
                                    <br>
                                    <br>
                                    <br>
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
    </section><!-- /flat-blog -->
@endsection
