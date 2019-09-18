<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{asset('css/bootstrap-dropdownhover.min.css')}}" rel="stylesheet">
<script src="{{asset('js/bootstrap-dropdownhover.js')}}"></script>

<div class="dropdown">
        <button class="btn btn-circle dropdown-toggle button-telephone btn-lg" type="submit" data-toggle="dropdown"
                data-hover="dropdown">
            <i class="fa fa-phone fa-1x" aria-hidden="true"></i>
        </button>

    <ul class="dropdown-menu">
        <li><span>Email : </span><a href="mailto:sluistechniek@gmail.com">sluistechniek@gmail.com</a></li>
        <li><span>Telefoonnummer: </span> <a class="telephone-hover" href="tel:+31629382003"> 06-29382003</a></li>
    </ul>
</div>

<script>
    if ($(window).width() > 481) {
        $(".button-telephone").click(function(){
            var url = "{{url('/contact')}}";
            window.open(url, '_blank');
        });
    } else {
        var value = 0;
        $(".button-telephone").click(function(){
            if(value == 0){
            $(".dropdown-menu").fadeIn();
            value = 1
            } else {
                $(".dropdown-menu").fadeOut();
                value = 0;
            }
        });

    }
</script>