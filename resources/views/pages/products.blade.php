@extends('layouts.app')
@section('title', 'Producten | ')
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
                        <form action="{{url('producten/search')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="usr">Naam</label>
                                <input type="text" name="name" class="form-control" placeholder="Zoek op productnaam..." id="usr">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="0" id="option1">Dome</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="0" id="option2">Bullet</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="0" id="option3">NVR</label>
                                </div>
                            </div>
                            <div class="form-group">

                            <div class="checkbox">
                                <label><input type="checkbox" value="0" id="option4">PTZ</label>
                            </div>
                            </div>


                            <div class="space-30"></div>
                            <label for="slider">Prijs</label> <br>
                            <b>€ 0</b> <b class="pull-right">€ {{$highestProductPrice}}</b>

                            <br>
                            <input id="ex2" type="text" class="span2" name="slider" value="" data-slider-min="0"
                                   style="width:100%"
                                   data-slider-max="{{$highestProductPrice}}" data-slider-step="5" data-slider-value="[0,{{$highestProductPrice}}]"/>

                            <div class="space-50"></div>
                            <button type="button" id="search" class="btn btn-custom">Zoeken</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1 products-list">
                <h3>Producten (<span id="number">{!! $count !!}</span>)</h3>

                <hr>
                <div class="space-30"></div>
                <div id='loadingmessage' style='display:none;    margin-left: 50%;margin-bottom:20px'>
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                </div>

                <div id="products">
                    @forelse($products as $product)
                        <div class="row">
                            <div class="col-md-5 ">
                                <img src="{{asset('/storage/'.$product->image)}}" class="img-responsive margin-center" alt="{{$product->name}}">
                            </div>
                            <div class="col-md-6 col-md-offset-0 col-xs-offset-1">
                                <div class="product">
                                    <div class="hidden-md hidden-lg">
                                        <div class="space-50"></div>
                                    </div>
                                    <h2>{{$product->name}}</h2>
                                    <div class="space-20"></div>
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="row">
                                    <div class="space-20"></div>
                                    <div class="col-md-3 col-sm-2 col-xs-3"><span
                                                class="price">&#8364; {{$product->price}}</span>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-5">
                                        <form action="{{url('/product/'. $product->id)}}">
                                            <button type="submit" class="btn btn-custom">Bekijk product</button>
                                        </form>
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-xs-push-1 col-xs-4">

                                        <form action="{{url('producten/buy/'. $product->id)}}">
                                            <button type="submit" class="btn btn-custom"><i class="fas fa-shopping-cart"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-30"></div>

                        <hr>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="space-100"></div>

    <div class="space-100"></div>
    @include('partials.telephone')

@endsection
@section('scripts')
    <script src="{{asset('js/bootstrap-slider.js')}}"></script>
    <script>
        $('#option1').on('change', function(){
            this.value = this.checked ? 1 : 0;
        }).change();
        $('#option2').on('change', function(){
            this.value = this.checked ? 1 : 0;
        }).change();
        $('#option3').on('change', function(){
            this.value = this.checked ? 1 : 0;
        }).change();
        $('#option4').on('change', function(){
            this.value = this.checked ? 1 : 0;
        }).change();

        $("#ex2").slider({});
        $("#search").on('click', function () {
            $("#products").empty();
            $('#loadingmessage').show();  // show the loading message.

            $.post("/producten/search",
                    {
                        _token: "{{csrf_token()}}",
                        slider: $('#ex2').val(),
                        name: $('#usr').val(),
                        option_one: $('#option1').val(),
                        option_two: $('#option2').val(),
                        option_three: $('#option3').val(),
                        option_four: $('#option4').val()
                    },
                    function (data) {
                        $("#number").html(data.length);
                        $.each(data, function (index) {
                            $("#products").append('<div class="row">' +
                                    '            <div class="col-md-5 ">' +
                                    '            <img src="{{asset("/storage/")}}/' + data[index].image + '" class="img-responsive" alt="">' +
                                    '            </div>' +
                                    '            <div class="col-md-7 col-md-offset-0 col-xs-offset-1">' +
                                    '            <div class="product">' +
                                    '            <div class="hidden-md hidden-lg">' +
                                    '            <div class="space-50"></div>' +
                                    '            </div>' +
                                    '            <h2>' + data[index].name + '</h2>' +
                                    '            <div class="space-20"></div>' +
                                    '            <p>' + data[index].description + '</p>' +
                                    '            </div>' +
                                    '            <div class="row">' +
                                    '            <div class="space-20"></div>' +
                                    '            <div class="col-md-3 col-xs-6"><span' +
                                    '    class="price">&#8364; ' + data[index].price + '</span>' +
                                    '    </div>' +
                                    '    <div class="col-md-3 col-xs-6">' +
                                    '        <form action="{{url('/product/')}}/' + data[index].id + '">' +
                                    '            <button type="submit" class="btn btn-custom">Bekijk product</button>' +
                                    '            </form>' +
                                    '            </div>' +
                                    '            </div>' +
                                    '            </div>' +
                                    '            </div>' +
                                    '            <div class="space-30"></div>' +
                                    '            <hr>'
                            )
                            ;
                        });
                        $('#loadingmessage').hide(); // hide the loading message
                    });
        })
    </script>
@endsection