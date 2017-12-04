@extends('layouts.app')
@section('title', 'Installatie | ')
@section('content')
    <div class="space-100"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="heading">
                    <h1 id="installatie">Jablotron</h1>
                </div>
                </div>
                </div>
        <div class="row">

                {{--@if(count($images) > 0)--}}
                    {{--<img src="{{asset('/storage/'. $images[0])}}" class="img-responsive" alt="">--}}
                {{--@elseif(count($images) > 1)--}}
                    {{--<div class="space-30"></div>--}}
                    {{--<img src="{{asset('/storage/'. $images[1])}}" class="img-responsive" alt="">--}}
                {{--@endif--}}

            <div class="col-md-12 ">
                {!! $blocks->body !!}
            </div>
        </div>
    </div>
    <div class="space-100"></div>
    @include('partials.telephone')
@endsection

