@extends('layouts.app')
@section('title', $product->name .' | ')
@section('description', $product->meta_description)
@section('image', asset('/storage/'.$product->image))
@section('header')
@endsection
@section('content')
    <div class="space-100"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <img src="{{asset('/storage/'.$product->image)}}" class="img-responsive" alt="{{$product->name}}">
            </div>
            <div class="col-md-6 col-md-offset-0 col-xs-offset-1">
                <div class="product-detail">
                    <div class="hidden-md hidden-lg">
                        <div class="space-50"></div>
                    </div>
                    <h1>{{$product->name}}</h1>
                    <span>&#8364; {{$product->price}}</span>
                    <div class="space-10"></div>
                    <p>{!! nl2br($product->description) !!}</p>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <hr>
    </div>

    <div class="space-100"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-offset-1 col-md-offset-0 col-xs-11">
                <p>{!! nl2br($product->extra_description) !!}</p>
            </div>
        </div>
    </div>
    <div class="space-100"></div>
@endsection