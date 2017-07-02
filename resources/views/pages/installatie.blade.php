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

                <img src="{{asset('images/camera3.png')}}" class="img-responsive" alt="">
                <div class="space-30"></div>
                <img src="{{asset('images/camera3.png')}}" class="img-responsive" alt="">
            </div>
            <div class="col-md-4">
                <div class="space-80"></div>

                <div class="hidden-md hidden-lg"> <div class="space-50"></div></div>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ipsum non quae. Accusamus autem
                    consequatur
                    doloremque est expedita fugiat id ipsum itaque molestiae nam nulla omnis, repudiandae rerum,
                    similique
                    voluptatem.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut deleniti eius fuga laudantium
                    magni mollitia placeat sunt. Architecto delectus doloribus eius impedit minima neque quia, totam
                    velit!
                    Molestiae, omnis?
                    lorem
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum error, ipsam mollitia nihil
                    recusandae reiciendis saepe tempore unde vel voluptas. Cumque doloribus dolorum esse illum in magni
                    nemo sint sunt.</p>
            </div>
            <div class="col-md-4">
                <div class="space-80"></div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias consequuntur delectus
                    dignissimos distinctio doloremque eius esse, illum inventore labore laboriosam nam nemo nobis quae
                    quam qui quibusdam sint ut.
                </p>
                <ul>
                    <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies
                        in,
                        diam. Sed arcu. Cras consequat.
                    </li>

                    <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum
                        vulputate, nunc.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space-100"></div>


@endsection
@section('scripts')

@endsection