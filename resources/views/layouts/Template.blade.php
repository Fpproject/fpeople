<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FPeople</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Icon Fonts-->
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/linea-arrows.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/linea-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Plugins-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/slick/slick-theme.css') }}"/>
    <!-- Template core CSS-->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <div class="col logo-big">
        <div class="head-box">
            <img class='img-responsive' src='assets/images/logo.png'/>
        </div>
    </div>
    <nav class="navbar navbar-toggleable-md navbar-inverse no-padding">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand logo-small" href="#">
            <img class='img-responsive logo-mobile' src='assets/images/logo.png' />
        </a>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="fashion">Fashion <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="beauty">Beauty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lifestyle">Lifestyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="potrait">Potrait</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="snatch">Snatch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
            </ul>

            <div class="my-2 my-lg-0">
                <ul class="navbar-nav icon-medsos">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class='' src='assets/images/icon-facebook.png' /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class='' src='assets/images/icon-twitter.png' /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class='' src='assets/images/icon-instagram.png' /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class='' src='assets/images/icon-path.png' /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img class='' src='assets/images/icon-youtube.png' /></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<div id='header-slide' class="container-fluid">
    <section id='slider-home' class="center slider">
        <div>
            <img src="assets/images/webbanner1.jpg" />
            <div class="caption">Slide 1 Caption</div>
        </div>
        <div>
            <img src="assets/images/webbanner2.jpg" />
            <div class="caption">Slide 2 Caption</div>
        </div>
        <div>
            <img src="assets/images/webbanner3.jpg" />
            <div class="caption">Slide 3 Caption</div>
        </div>
    </section>
</div>

@yield('content')



<div id='content-footer'>
    <div class="container">
        <div class="row">
            <div class="top-footer">
                <div class="col-md-12 col-lg-3"><h3>Subscribe:</h3></div>
                <div class="col-md-12 col-lg-6"><input type="text" class="form-control" name=''/></div>
                <div class="col-md-12 col-lg-3">
                    <ul class="icon-medsos">
                        <li class="nav-item">
                            <a href="#"><img class='' src='assets/images/icon-facebook.png' /></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><img class='' src='assets/images/icon-twitter.png' /></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><img class='' src='assets/images/icon-instagram.png' /></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><img class='' src='assets/images/icon-path.png' /></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><img class='' src='assets/images/icon-youtube.png' /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="menu-footer">
                    <div class="menu-footer-header">Fashion</div>
                    <ul class="menu-list">
                        <li><a href="#">Fashion News</a></li>
                        <li><a href="#">Insight</a></li>
                        <li><a href="#">Trend Alert</a></li>
                    </ul>
                </div>
                <div class="menu-footer">
                    <div class="menu-footer-header">Beauty</div>
                    <ul class="menu-list">
                        <li><a href="#">Beauty Trend</a></li>
                        <li><a href="#">Beauty News</a></li>
                        <li><a href="#">Suitor</a></li>
                        <li><a href="#">Beauty Box</a></li>
                    </ul>
                </div>
                <div class="menu-footer">
                    <div class="menu-footer-header">Lifestyle</div>
                    <ul class="menu-list">
                        <li><a href="#">Beauty Trend</a></li>
                        <li><a href="#">Beauty News</a></li>
                        <li><a href="#">Suitor</a></li>
                        <li><a href="#">Beauty Box</a></li>
                    </ul>
                </div>
                <div class="menu-footer">
                    <div class="menu-footer-header">Potrait</div>
                    <ul class="menu-list">
                        <li><a href="#">Cover Story</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="menu-footer">
                    <div class="menu-footer-header">Snatch</div>
                    <ul class="menu-list">
                        <li><a href="#">Upcoming Events</a></li>
                        <li><a href="#">Previous Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts-->
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
<!-- Script plugins-->
<script type="text/javascript" charset="utf-8" src="{{ URL::asset('assets/plugins/slick/slick.js') }}"></script>


<script type="text/javascript">
    $(document).on('ready', function() {

        var divHeight = $('.col-1').height();
        $('.col-2').css('height', divHeight+'px');

        $("#slider-home").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 1
        });



    });
</script>
</body>
</html>
@yield('footer')