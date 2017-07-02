@extends('layouts.app')
@section('title', '')
@section('description','')
@section('header')
@endsection
@section('content')

    <div class="space-100"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 products-filter">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space-10"></div>
                        <h4>Filters</h4>
                        <div class="space-30"></div>
                        <div class="form-group">
                            <label for="usr">Naam</label>
                            <input type="text" class="form-control" placeholder="Naam" id="usr">
                        </div>

                        <div class="space-30"></div>
                        <label for="slider">Prijs</label> <br>
                        <b>€ 0</b> <b class="pull-right">€ 1000</b>

                        <br>
                        <input id="ex2" type="text" class="span2" value="" data-slider-min="0" style="width:100%"
                               data-slider-max="1000" data-slider-step="5" data-slider-value="[0,450]"/>

                        <div class="space-50"></div>
                        <button type="button" class="btn btn-custom">Zoeken</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1 products-list">
                <h3>Producten (1)</h3>

                <hr>
                <div class="space-30"></div>

                <div class="row">
                    <div class="col-md-5 ">
                        <img src="{{asset('images/camera3.png')}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 col-md-offset-0 col-xs-offset-1">
                        <div class="product">
                            <div class="hidden-md hidden-lg">
                                <div class="space-50"></div>
                            </div>
                            <h2>Panasonic Lumix DMC-SZ10 Zwart </h2>
                            <div class="space-20"></div>

                            <p>Keep an eye on your little one with the DCS-825L Wi-Fi Baby Camera. This portable camera
                                transforms your mobile device into a versatile, yet easy to use baby monitor.</p>
                            <ul>
                                <li>21,6 megapixel CMOS censor</li>
                                <li>25x optische zoom</li>
                                <li>Wifi en NFC</li>

                            </ul>
                        </div>
                        <div class="row">
                            <div class="space-20"></div>
                            <div class="col-md-3 col-xs-6"><span class="price">&#8364; 129</span>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <form action="{{url('/product/1')}}">
                                    <button type="submit" class="btn btn-custom">Bekijk product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-30"></div>

                <hr>
            </div>
        </div>
    </div>

    <div class="space-100"></div>

    <div class="space-100"></div>


@endsection
@section('scripts')
    <script src="{{asset('js/bootstrap-slider.js')}}"></script>
    <script>
        $("#ex2").slider({});
    </script>
@endsection