<footer>
    <div class="container">
        <div class="space-30"></div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <ul>
                    <li>
                        Sitemap
                        <div class="space-10"></div>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/producten')}}">Producten</a></li>
                            <li><a href="{{url('/installatie')}}">Installatie</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3  col-xs-6 col-sm-3 col-sm-push-1 col-md-push-3">
                <ul>
                    <li>
                        @if($footer)
                            {!! $footer !!}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-wrapper">
                    <span>&#9400; {{date('Y')}} - <a href="{{url('/')}}"> Sluistechniek.nl </a></span></div>
            </div>
        </div>
        <div class="space-30"></div>

    </div>

</footer>