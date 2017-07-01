@extends('layouts.app')
@section('title', '| Dé specialist in jouw favoriete gamecards!')
@section('description','')

@section('header')
@endsection
@section('content')

    <style>
        #map {
            height: 300px;
            width: 100%;
        }

    </style>
    <div class="space-100"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <div class="space-100"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="heading">
                    <h1>
                        Offerte aanvragen
                    </h1>
                </div>
                <div class="space-20"></div>
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="name">Naam <span>*</span></label>
                                <input type="text" required class="form-control" id="name" aria-describedby="emailHelp"
                                       placeholder="Naam">
                                <div class="space-20"></div>
                                <label for="email">Email <span>*</span></label>
                                <input type="email" required class="form-control" id="name" aria-describedby="emailHelp"
                                       placeholder="Email">
                                <div class="space-20"></div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleTextarea">Bericht</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="space-20"></div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary">Verzenden</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-md-offset-1 ">
                <div class="heading">
                    <h1>
                        Gegevens
                    </h1>
                </div>
                <div class="space-20"></div>

                <div class="contact-info">
                <p>
                    Vul linksstaand formulier in om
                    een offerte aan te vragen, of neem
                    contact op via onderstaande
                    gegevens,
                </p>
                <div class="space-20"></div>

                <ul class="no-padding">
                    <li>Capelle aan den IJssel</li>
                    <li>Gruttosingel 55</li>
                    <li>06-29382003</li>
                    <li><a href="mailto:info@sluistechniek.nl">info@sluistechniek.nl</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="space-100"></div>


@endsection
@section('scripts')

    <script>
        function initMap() {
            var uluru = {lat: 51.930728, lng: 4.597929};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzAzanQMdrOwWH1sCkBq-FcV5-RSn9AMM&callback=initMap">
    </script>
@endsection