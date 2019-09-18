<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="{{(env('APP_ENV') != 'production') ? 'none' : 'index, follow'}}">
    @include('partials.seo')
    <meta name="google-site-verification" content="fM52JnufYc07VlBaeOSu6528fG8OoNrhnxGAu2d8gyI" />

    <title>@yield('title')Sluis Techniek</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-72033415-2', 'auto');
        ga('send', 'pageview');
    </script>

    @yield('header')
</head>
<body class="body-wrapper" itemscope itemtype="http://schema.org/WebPage">

<div class="main-wrapper">
    <div class="header clearfix">
        <nav class="navbar navbar-main navbar-collapse " role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-closed" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <span>Sluistechniek</span>
                </a>
            </div>

            <div class="links" id="myNavbar">
                <div class="nav-wrapper">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="list-fade {{ Request::is('/') ? "active" : '' }}"><a
                                    href="{{url('/')}}">Home</a></li>

                        <li class="list-fade {{ Request::is('producten') ? "active" : '' }} {{ Request::is('product/*') ? "active" : '' }}"><a
                                    href="{{url('/producten')}}">Camera's</a></li>
                        <li class="list-fade {{ Request::is('jablotron') ? "active" : '' }}"><a
                                    href="{{url('/jablotron')}}">Jablotron</a>
                        </li>
                        <li class="list-fade {{ Request::is('contact') ? "active" : '' }}"><a
                                    href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="list-fade {{ Request::is('cart') ? "active" : '' }}"><a
                                    href="{{url('/cart')}}"><i class="fas fa-shopping-cart"></i></a>
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
            $('.links').fadeIn();
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
            $('.links').fadeOut();
            $(this).removeClass('toggle-open');
            $(this).addClass('toggle-closed');
            $(this).find('i').removeClass('icon-close');
            $(this).find('i').addClass('icon-menu');

        }
    });

    function checkWidth() {
        var windowsize = $(window).width();
        if (windowsize > 1034) {
            $('.links').show();
        } else {
            $('.links').hide();
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
</script>
</body>
</html>