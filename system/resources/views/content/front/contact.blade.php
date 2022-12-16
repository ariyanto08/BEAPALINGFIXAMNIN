@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            HUBUNGI
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url('home') }}">Home</a></span><span
                                class="page-title-content-inner">Hubungi</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->


    <!-- Contact -->
    <section class="flat-contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <div class="contact-left">
                        <h3 class="section-subtitle mg-bottom-22">+++++++</h3>
                        <h2 class="section-title mg-bottom-15">Untuk pengaduan serta keperluan lainnya silahkan
                            hubungi.</h2>
                        <hr>
                        <div class="address-box mg-bottom30">
                            <div class="contact-location icon-map"></div>
                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20">
                                    Alamat</h3>
                                <p class="desc-box text-pri2-color">Jl. M.Tohir No.26-27, Kabupaten Ketapang,
                                    Kalimantan Barat</p>
                            </div>
                        </div>
                        <div class="address-box mg-bottom30">
                            <div class="contact-phone icon-phone"></div>
                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20">
                                    Nomor Telepon</h3>
                                <p class="desc-box text-pri2-color">+628998480904</p>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="contact-mail icon-mail"></div>
                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20">
                                    Email</h3>
                                <p class="desc-box text-pri2-color">plibcketapang@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                    </div>
                </div>
                <div class="col-md-7 wow fadeInUp">
                    <div class="contact-right" style=" position: relative;
                    padding-bottom: 90%;">
                        <iframe
                            style="position: absolute;
                        top: -20px;
                        left: 0;
                        width: 100% !important;
                        height: 100% !important;
                        "
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.99718536615!2d109.9747773!3d-1.8452814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56d3cd561c88eb5a!2sBea%20Cukai%20Ketapang!5e0!3m2!1sid!2sid!4v1667444430447!5m2!1sid!2sid"
                            width="550px" height="590px" style="border:1;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
