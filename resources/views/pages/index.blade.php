@extends('layouts.app')
@section('title', '| Dé specialist in jouw favoriete gamecards!')
@section('description','')

@section('header')
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')

    <div class="space-50"></div>
    <div class="space-50"></div>
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
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="owl-carousel owl-theme" id="home-carousel">
                <div class="item">
                    <img src="{{asset('images/camera2.png')}}" alt="">
                    <span>Canon powershot SX620</span>
                    <ul>
                        <li>21,6 megapixel CMOS Sensor</li>
                        <li>25x optische zoom</li>
                        <li>Wifi en NRC</li>
                    </ul>
                    <p></p>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })</script>
@endsection