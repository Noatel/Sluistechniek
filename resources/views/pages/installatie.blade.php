@extends('layouts.app')
@section('title', '| Dé specialist in jouw favoriete gamecards!')
@section('description','')

@section('header')
@endsection
@section('content')

    <div class="space-100"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="heading">
                    <h1 id="installatie">Installatie</h1>
                </div>
                <div class="space-20"></div>

                @if(count($images) > 0)
                    <img src="{{asset('/storage/'. $images[0])}}" class="img-responsive" alt="">
                @elseif(count($images) > 1)
                    <div class="space-30"></div>
                    <img src="{{asset('/storage/'. $images[1])}}" class="img-responsive" alt="">
                @endif

            </div>
            <div class="col-md-8">
                <div class="space-80"></div>
                {!! $blocks->body !!}
            </div>
        </div>
    </div>
    <div class="space-100"></div>


@endsection

