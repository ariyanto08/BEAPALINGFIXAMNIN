@extends('template.client')
@section('content')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            VIDEO
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="index.html">Home</a></span><span
                                class="page-title-content-inner">Publikasi</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.page-title -->

    <!-- Our services -->
    <section class="flat-why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($list_profil as $profil)
                        <div class="mg-bottom-60 wow fadeInLeft"
                            style="float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; ">
                            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" width="1170"
                                height="740" src="{{ url($profil->link) }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @endforeach
                </div>
                <hr>
                @foreach ($list_video as $video)
                    <div class="item-three-column mg-bottom-60 wow fadeInLeft">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <iframe width="370" height="240" src="{{ url($video->link) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="button hover-up">
                <a href="https://www.youtube.com/channel/UC-bH6iCxZLd8qQ0K2MwBQ5Q" class="btn2"
                    style="display: flex;
        justify-content: center; ;">LIHAT SEMUA</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="100" data-smobile="100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
