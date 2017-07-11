@extends('layouts.app')
@section('title', '')
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
                    <img src="{{asset('/storage/'. $images[0][0] )}}" class="img-responsive" id="homepage_camera" alt="Camera">
                </div>
                <div class="space-100 hidden-md hidden-lg"></div>

                <div class="col-md-5 col-md-offset-1  col-sm-10 col-sm-offset-2 col-xs-12 ">
                    <div class="home-text">
                        <h1>{!! $blocks[0]->title !!}</h1>
                        <div class="space-10"></div>
                        {!! $blocks[0]->body !!}
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
                    @forelse($products as $product)
                        <div class="item">
                            <img class="item-image img-responsive" src="{{asset('/storage/'.$product->image)}}" alt="">
                            <div class="span-align">
                                <div class="space-30"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>{{$product->name}}</span>
                                        <p>
                                            {{$product->description}}
                                        </p>
                                        <div class="row">
                                            <div class="space-20"></div>
                                            <div class="col-xs-5"><span
                                                        class="price">&#8364; {{$product->price}}</span>
                                            </div>
                                            <div class="col-xs-6">
                                                <form action="{{url('/product/'. $product->id)}}">
                                                    <button type="submit" class="btn btn-custom">Bekijk product</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
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
                <h2>Beveiliging uw huis met SluisTechniek</h2>
                <p>Sluistechniek kan ook de installatie verzorgen</p>
                <div class="space-50"></div>
                <div class="space-30"></div>

            </div>
        </div>
    </div>
    <div class="space-100"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 home-installatie">
                <div class="heading">
                    <h2 class="heading-title">{!! $blocks[1]->title !!}</h2>
                </div>
               {!! $blocks[1]->body !!}
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="space-70"></div>
                <img src="{{asset('/storage/'. $images[1][0] )}}" class="img-responsive" alt="Camera">
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