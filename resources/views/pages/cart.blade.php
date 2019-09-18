@extends('layouts.app')
@section('title', 'Winkelwagen | ')
@section('header')
@endsection
@section('content')
    @if(Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> Uw bericht is
                            succesvol verzonden</em></div>
                </div>
            </div>
        </div>
    @endif
    <div class="space-20"></div>
    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <div class="heading">
                    <h1>
                        Winkelwagen
                    </h1>
                </div>
                <div class="space-20"></div>
                <div class="row">
                    <div class="col-md-12 fill">
                        @if(count($products))
                            <div class="cartListInner">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Productnaam</th>
                                            <th>Prijs</th>
                                            <th>Aantal</th>
                                            <th>Subtotaal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($products as $product)
                                            <tr>
                                                <td class="col-xs-2">
                                                    <a href="{{url('/cart/'.$product->rowId.'/'.$session_id.'/verwijderen')}}"
                                                       class="close"
                                                       data-dismiss="alert"><span aria-hidden="true">×</span></a>
                                                </td>
                                                <td class="col-xs-4">{{$product->name}}</td>
                                                <td class="col-xs-2">&euro;{{$product->price}}</td>
                                                <td class="col-xs-2"><input type="text" placeholder="1"
                                                                            value="{{$product->qty}}" disabled></td>
                                                <td class="col-xs-2">&euro;{{$product->price * $product->qty}}</td>
                                            </tr>
                                        @empty

                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="updateArea">
                                    <form action="{{url('/cart/discount')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Kortingscode"
                                                   aria-describedby="basic-addon2" value="{{Session::get('discount')}}"
                                                   name="discount">
                                            <button type="submit" class="btn input-group-addon">Toevoegen</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="totalAmountArea">
                                    <div class="col-sm-6 col-sm-offset-6 col-xs-12">
                                        <ul class="list-unstyled">
                                            <li>Subtotaal <span>&euro;{{$subTotal}}</span></li>
                                            @if(isset($btwMargin))
                                                <li>Btw 21% <span>&euro;{{$btwMargin}}</span></li>
                                            @endif
                                            @if($discount)
                                                <li>Kortingscode <span>{{$discount->discount_code}}</span></li>
                                            @endif

                                            <li>Totaal <span class="grandTotal">&euro;{{$total}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="checkBtnArea">
                                    <a href="{{url('/cart/checkout')}}" class="btn btn-primary btn-block">Afrekenen<i
                                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        @else
                            <p>
                                Er staan geen artikelen in het winkelwagentje.
                            </p>
                            <div class="space-100"></div>
                            <div class="space-100"></div>
                            <div class="space-100"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-100"></div>


@endsection
@section('scripts')

@endsection