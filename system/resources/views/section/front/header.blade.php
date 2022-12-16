<div class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col md-4">
                <div class="top-bar-left">
                    <p class="top-location">Jl. M.Tohir No.26-27, Kabupaten Ketapang, Kalimantan Barat</p>
                </div>
            </div>
            <div class="col md-8">
                <div class="top-bar-right link-style3">
                    <p class="top-location"> <i class="fa fa-phone" aria-hidden="true"></i> +628998480904
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="header" class="header header-style2 bg-color">
    <div class="container-fluid">
        <div class="row">
            <div class="header-wrap">
                <div class="col-md-4">
                    <div class="inner-header">
                        <div style=" margin-top: 4%;">
                            <img style="height: 54px; " src="{{ url('public') }}/client/icon/logo-dark.svg" alt="images" />
                        </div>
                        <!-- /#logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div>
                        <!-- //mobile menu button -->
                    </div>

                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-8">
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="menu-item ">
                                    <a href="{{ url('home') }}" title="">HOME</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">PROFIL</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('profil/profil') }}" title="">-PROFIL</a></li>
                                        <li><a href="{{ url('profil/visi') }}" title="">-VISI, MISI & MOTO</a>
                                        </li>
                                        <li><a href="{{ url('profil/struktur') }}" title="">-STRUKTUR
                                                ORGANISASI</a></li>
                                        <li><a href="{{ url('profil/komposisi') }}" title="">-KOMPOSISI
                                                PEGAWAI</a>
                                        </li>
                                        <li><a href="{{ url('profil/wilayah') }}" title="">-WILAYAH KERJA</a></li>
                                        <li><a href="{{ url('profil/janji') }}" title="">-JANJI LAYANAN</a></li>
                                        <li><a href="{{ url('profil/maklumat') }}" title="">-MAKLUMAT
                                                PELAYANAN</a>
                                        </li>

                                    </ul>
                                    <!-- /.sub-menu -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">PUBLIKASI</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('publikasi/berita') }}" title="">-BERITA</a></li>
                                        <li><a href="{{ url('publikasi/video') }}" title="">-VIDEO</a></li>
                                    </ul>
                                    <!-- /.sub-menu -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">PERATURAN</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('peraturan/sop') }}" title="">-SOP</a>
                                        </li>
                                        @foreach ($list_direktori as $direktori)
                                            <li><a href="{{ $direktori->link }}" title="">-DIREKTORI
                                                    PERATURAN</a></li>
                                        @endforeach
                                        <li><a href="{{ url('peraturan/faq') }}" title="">-FAQ</a></li>
                                    </ul>
                                    <!-- /.sub-menu -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">INFORMASI PUBLIK</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/halaman-utama-ppid.html"
                                                title="">-HALAMAN UTAMA</a></li>
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/regulasi.html"
                                                title="">-REGULASI</a>
                                        </li>
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/profil.html"
                                                title="">-PROFIL</a>
                                        </li>
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/informasi-publik-wajib-berkala.html"
                                                title="">-INFORMASI PUBLIK WAJIB BERKALA</a>
                                        </li>
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/informasi-publik-wajib-serta-merta.html"
                                                title="">-INFORMASI PUBLIK SERTA MERTA</a>
                                        </li>
                                        <li><a href="https://www.beacukai.go.id/arsip/lip/informasi-publik-tersedia-setiap-saat.html"
                                                title="">-INFORMASI PUBLIK TERSEDIA SETIAP SAAT</a>
                                        </li>

                                    </ul>
                                    <!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="{{ url('hubungi') }}" title="">HUBUNGI</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.header-wrap -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
