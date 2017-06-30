@extends('layouts.app')
@section('title', '| Dé specialist in jouw favoriete gamecards!')
@section('description','')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}"/>
@endsection
@section('content')

    <div class="space-100"></div>
    <div id="home">
        <div class="circles"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/camera.png')}}" id="homepage_camera" alt="Camera">
                </div>
                <div class="space-100 hidden-md hidden-lg"></div>

                <div class="col-md-5 col-md-offset-1 col-sm-offset-0 col-sm-6 col-xs-12 ">
                    <div class="home-text">
                        <h1>High quality camera's</h1>
                        <div class="space-10"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                            massa
                            quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                            justo,
                            rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-100"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slick" id="home-carousel">
                    <div class="item">
                        <img src="{{asset('images/camera2.png')}}" alt="">
                        <div class="span-align">
                            <span>Canon powershot SX620</span>
                        </div>
                        <ul>
                            <li>21,6 megapixel CMOS Sensor</li>
                            <li>25x optische zoom</li>
                            <li>Wifi en NRC</li>
                        </ul>
                    </div>  <div class="item">
                        <img src="{{asset('images/camera2.png')}}" alt="">
                        <div class="span-align">
                            <span>Canon powershot SX620</span>
                        </div>
                        <ul>
                            <li>21,6 megapixel CMOS Sensor</li>
                            <li>25x optische zoom</li>
                            <li>Wifi en NRC</li>
                        </ul>
                    </div>  <div class="item">
                        <img src="{{asset('images/camera2.png')}}" alt="">
                        <div class="span-align">
                            <span>Canon powershot SX620</span>
                        </div>
                        <ul>
                            <li>21,6 megapixel CMOS Sensor</li>
                            <li>25x optische zoom</li>
                            <li>Wifi en NRC</li>
                        </ul>
                    </div>  <div class="item">
                        <img src="{{asset('images/camera2.png')}}" alt="">
                        <div class="span-align">
                            <span>Canon powershot SX620</span>
                        </div>
                        <ul>
                            <li>21,6 megapixel CMOS Sensor</li>
                            <li>25x optische zoom</li>
                            <li>Wifi en NRC</li>
                        </ul>
                    </div>
                    <div class="item">
                        <img src="{{asset('images/camera2.png')}}" alt="">
                            <div class="span-align">
                            <span>Canon powershot SX620</span>
                            </div>
                            <ul>
                                <li>21,6 megapixel CMOS Sensor</li>
                                <li>25x optische zoom</li>
                                <li>Wifi en NRC</li>
                            </ul>
                        </div>
                </div>


            </div>
        </div>
    </div>
    <div class="clear-fix"></div>
    <div class="space-100"></div>

    <div class="container-fluid no-padding">
        <div class="home-wrapper">
            <div class="text-wrapper">
                <div class="space-30"></div>
                <div class="space-50"></div>
                <h2>Bevelig uw huis met SluisTechniek</h2>
                <p>Sluistechniek kan ook de installatie verzorgen</p>
                <div class="space-50"></div>
                <div class="space-30"></div>

            </div>
        </div>
    </div>
    <div class="space-100"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 home-installatie">
                <h2>Installatie door Sluistechniek</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa eius et exercitationem fugiat hic
                    illum ipsa, itaque officia omnis, quam quia ratione suscipit velit voluptatem! Aliquid ipsam magni
                    voluptate
                    Lorem ipsum dolor sit amet <br> <br> consectetur adipisicing elit. Ab aliquid architecto consequatur
                    consequuntur cumque delectus, hic id illo inventore, nihil nisi quidem quos ratione rerum sint ut
                    vel voluptates voluptatibus.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis dolores eligendi esse
                    nam obcaecati omnis perspiciatis quia! Accusamus, animi consequatur delectus eaque ipsa numquam quae
                    qui ratione sit velit?
                </p>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="space-70"></div>
                <img src="{{asset('images/camera4.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="space-100"></div>


@endsection
@section('scripts')
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script>
        $('.slick').slick({
            slidesToShow: 4,
            dots: false,
            infinite: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1340,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 995,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }],
            prevArrow: "<div class='slick-left pull-left'><i class='glyphicon glyphicon-chevron-left' aria-hidden='true'></i></div>",
            nextArrow: "<div class='slick-right pull-right'><i class='glyphicon glyphicon-chevron-right' aria-hidden='true'></i></div>"
        });

    </script>
@endsection