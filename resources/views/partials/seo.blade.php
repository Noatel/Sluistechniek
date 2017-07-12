    <meta name="description" content="@yield('description', config('app.description'))">
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="@yield('title')Sluis Techniek"/>
    <meta property="og:description" content="@yield('description', config('app.description'))"/>
    <meta property="og:site_name" content="{{config('app.name')}}"/>
    <meta property="og:image" content="@yield('image', asset('/images/seo.png'))"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="@yield('title')Sluis Techniek"/>
    <meta name="twitter:description" content="@yield('description', config('app.description'))"/>
    <meta name="twitter:image" content="@yield('image', asset('/images/seo.png'))"/>
    <link href="{{url('/')}}" rel="canonical">