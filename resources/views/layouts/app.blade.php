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


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')
</head>
<body class="body-wrapper" itemscope itemtype="http://schema.org/WebPage">

<div class="main-wrapper">
    <div class="header clearfix">
        <nav class="navbar navbar-main " role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <span>Sluistechniek</span>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li {{ Request::is('/') ? 'class=active' : '' }}><a href="{{url('/')}}">Home</a></li>

                    <li {{ Request::is('producten') ? 'class=active' : '' }}><a
                                href="{{url('/producten')}}">Producten</a></li>
                    <li {{ Request::is('installatie') ? 'class=active' : '' }}><a href="{{url('/installatie')}}">Installatie</a>
                    </li>
                    <li {{ Request::is('contact') ? 'class=active' : '' }}><a href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('scripts')
</body>
</html>