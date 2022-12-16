@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            KOMPOSISI PEGAWAI
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
                                        KOMPOSISI PEGAWAI
                                    </h5>
                                    <hr>
                                </div>
                                <div>
                                    <h1 style="color: BLACK;font-family: 'Jost', sans-serif;">KOMPOSISI PEGAWAI
                                        BERDASARKAN JABATAN
                                    </h1>
                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="has-text-align-center" data-align="center">Jabatan</th>
                                            <th class="has-text-align-center" data-align="center">Jumlah Pegawai
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @foreach ($jabatan as $jabatan)
                                            <tr>
                                                <td>{{ $jabatan->nama }}</td>
                                                <td>@php $total += $jabatan->jumlah @endphp {{ $jabatan->jumlah }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="has-text-align-center">
                                            <td>Total</td>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tfoot>

                                </table>
                                <br>
                                <br>
                                <div>
                                    <h1 style="color: BLACK;font-family: 'Jost', sans-serif;">KOMPOSISI PEGAWAI
                                        BERDASARKAN USIA
                                    </h1>
                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="has-text-align-center" data-align="center">Usia</th>
                                            <th class="has-text-align-center" data-align="center">Jumlah Pegawai
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @foreach ($usia as $usia)
                                            <tr>
                                                <td>{{ $usia->nama }}</td>
                                                <td>@php $total += $usia->jumlah @endphp {{ $usia->jumlah }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="has-text-align-center">
                                            <td>Total</td>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <br>
                                <br>
                                <div>
                                    <h1 style="color: BLACK;font-family: 'Jost', sans-serif;">KOMPOSISI PEGAWAI
                                        BERDASARKAN JENIS KELAMIN
                                    </h1>
                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="has-text-align-center" data-align="center">Jenis Kelamin</th>
                                            <th class="has-text-align-center" data-align="center">Jumlah Pegawai
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @foreach ($jenis_kelamin as $jenis_kelamin)
                                            <tr>
                                                <td>{{ $jenis_kelamin->nama }}</td>
                                                <td>@php $total += $jenis_kelamin->jumlah @endphp {{ $jenis_kelamin->jumlah }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="has-text-align-center">
                                            <td>Total</td>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <br>
                                <br>
                                <div>
                                    <h1 style="color: BLACK; font-family: 'Jost', sans-serif;">KOMPOSISI PEGAWAI
                                        BERDASARKAN PENDIDIKAN
                                    </h1>
                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="has-text-align-center" data-align="center">PENDIDIKAN</th>
                                            <th class="has-text-align-center" data-align="center">Jumlah Pegawai
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @foreach ($pendidikan as $pendidikan)
                                            <tr>
                                                <td>{{ $pendidikan->nama }}</td>
                                                <td>@php $total += $jenis_kelamin->jumlah @endphp {{ $jenis_kelamin->jumlah }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="has-text-align-center">
                                            <td>Total</td>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
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
