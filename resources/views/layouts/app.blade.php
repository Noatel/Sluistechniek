<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (stristr(Request::server('DOCUMENT_ROOT'), 'vagrant') !== false || stristr(Request::server('HTTP_HOST'), 'liamboer.nl') !== false)
        <meta name="robots" content="none">
    @endif
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description" content="@yield('description')">
    <title>Sluistechniek.nl </title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="sluistechniek.nl @yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:site" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="{{url('')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="sluistechniek.nl @yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="sluistechniek.nl">
    <meta property="og:image" content="">
    <meta property="og:url" content="{{url('/')}}">
    <link href="{{url('/')}}" rel="canonical">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('header')
</head>
<body class="body-wrapper" itemscope itemtype="http://schema.org/WebPage">

<div class="main-wrapper">
    <div class="header clearfix">
        <nav class="navbar navbar-main navbar-collapse " role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-closed" data-toggle="collapse"
                        data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <span>Sluistechniek</span>
                </a>
            </div>

            <div class="links  fade-nav" id="myNavbar">
                <div class="nav-wrapper">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="list-fade {{ Request::is('/') ? "active" : '' }}"><a
                                    href="{{url('/')}}">Home</a></li>

                        <li class="list-fade {{ Request::is('producten/1') ? "active" : '' }}"><a
                                    href="{{url('/producten')}}">Producten</a></li>
                        <li class="list-fade {{ Request::is('installatie') ? "active" : '' }}"><a
                                    href="{{url('/installatie')}}">Installatie</a>
                        </li>
                        <li class="list-fade {{ Request::is('contact') ? "active" : '' }}"><a
                                    href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>


</div>
@include('layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('scripts')
<script>
    $('.navbar-toggle').on('click', function () {
        if ($(this).hasClass('toggle-closed')) {
            $('.fade-nav').fadeIn();
            $('.list-fade').hide().each(function (i) {
                slow = (i) * 420;
                setTimeout(function (div) {
                    div.show().addClass('animated bounceInLeft');
                }, slow, $(this));
            });
            $(this).removeClass('toggle-closed');
            $(this).addClass('toggle-open');
            $('body').addClass('scroll-lock');
            $(this).find('i').removeClass('icon-menu');
            $(this).find('i').addClass('icon-close');
        }
        else {
            $('body').removeClass('scroll-lock');
            $('.fade-nav').fadeOut();
            $(this).removeClass('toggle-open');
            $(this).addClass('toggle-closed');
            $(this).find('i').removeClass('icon-close');
            $(this).find('i').addClass('icon-menu');
        }
    });
</script>
</body>
</html>