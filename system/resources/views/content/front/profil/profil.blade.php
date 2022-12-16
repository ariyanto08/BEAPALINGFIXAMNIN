@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            PROFIL
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
                            @foreach ($list_profil as $profil)
                                <div class="image-box">
                                    <h5 class="section-title text-center">
                                        VIDEO PROFIL
                                    </h5>
                                    <hr>
                                    <div class="image"
                                        style="float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;">
                                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                            width="770" height="450" src="{{ url($profil->link) }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            @endforeach
                            <div class="content-box">
                                <div class="content-art">
                                    <h5 class="section-title text-center">
                                        SEJARAH
                                    </h5>
                                    <hr>
                                    <p class="desc-content-box text-decs">
                                        CUSTOMS (Instansi Kepabeanan) di mana pun di dunia ini adalah suatu
                                        organisasi yang keberadaannya sangat essensial bagi suatu negara, demikian
                                        pula dengan Direktorat Jenderal Bea dan Cukai (Instansi Kepabeanan
                                        Indonesia) adalah suatu instansi yang memiliki peran yang cukup penting pada
                                        suatu negara.
                                        <br>
                                        <br>
                                        Bea dan Cukai (selanjutnya kita sebut Bea Cukai) merupakan institusi global
                                        yang hampir semua negara di dunia memilikinya. Bea Cukai merupakan perangkat
                                        negara “konvensional” seperti halnya kepolisian, kejaksaan, pengadilan,
                                        ataupun angkatan bersenjata, yang eksistensinya telah ada sepanjang masa
                                        sejarah negara itu sendiri.
                                        <br>
                                        <br> Fungsi Bea Cukai di Indonesia diyakini sudah ada
                                        sejak zaman kerajaan dahulu, namun belum ditemukan bukti-bukti tertulis yang
                                        kuat. Kelembagaannya pada waktu itu masih bersifat “lokal” sesuai wilayah
                                        kerajaannya. Sejak VOC masuk, barulah Bea Cukai mulai terlembagakan secara
                                        “nasional”. Pada masa Hindia Belanda tersebut, masuk pula istilah douane
                                        untuk menyebut petugas Bea Cukai (istilah ini acapkali masih melekat sampai
                                        saat ini). Nama resmi Bea Cukai pada masa Hindia Belanda tersebut adalah De
                                        Dienst der Invoer en Uitvoerrechten en Accijnzen (I. U & A) atau dalam
                                        terjemah bebasnya berarti “Dinas Bea Impor dan Bea Ekspor serta Cukai”.
                                        Tugasnya adalah memungut invoer-rechten (bea impor/masuk), uitvoer-rechten
                                        (bea ekspor/keluar), dan accijnzen (excise/ cukai). Tugas memungut bea
                                        (“bea” berasal dari bahasa Sansekerta), baik impor maupun ekspor, serta
                                        cukai (berasal dari bahasa India) inilah yang kemudian memunculkan istilah
                                        Bea dan Cukai di Indonesia. Peraturan yang melandasi saat itu di antaranya
                                        Gouvernment Besluit Nomor 33 tanggal 22 Desember 1928 yang kemudian diubah
                                        dengan keputusan pemerintah tertanggal 1 Juni 1934. Pada masa pendudukan
                                        Jepang, berdasarkan Undang-undang Nomor 13 tentang Pembukaan Kantor-kantor
                                        Pemerintahan di Jawa dan Sumatera tanggal 29 April 1942, tugas pengurusan
                                        bea impor dan bea ekspor ditiadakan, Bea Cukai sementara hanya mengurusi
                                        cukai saja. Lembaga Bea Cukai setelah Indonesia merdeka, dibentuk pada
                                        tanggal 01 Oktober 1946 dengan nama Pejabatan Bea dan Cukai. Saat itu
                                        Menteri Muda Keuangan, Sjafrudin Prawiranegara, menunjuk R.A Kartadjoemena
                                        sebagai Kepala Pejabatan Bea dan Cukai yang pertama. Jika ditanya kapan hari
                                        lahir Bea Cukai Indonesia, maka 1 Oktober 1946 dapat dipandang sebagai
                                        tanggal yang tepat.
                                        <br>
                                        <br>
                                        Berdasarkan Peraturan Pemerintah Nomor 51 tahun 1948, istilah Pejabatan Bea
                                        Cukai berubah menjadi nama menjadi Jawatan Bea dan Cukai, yang bertahan
                                        sampai tahun 1965. Setelah tahun 1965 hingga sekarang, namanya menjadi
                                        Direktorat Jenderal Bea dan Cukai (DJBC).

                                    </p>
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
    <!-- /flat-blog
@endsection
