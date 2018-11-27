<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('css/template/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/template/main.css')}}">
</head>
<body>
@section('nav')
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="/"><img src="img/logo.png" alt="" title=""/></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>
                        {{--<li><a href="">Blog</a></li>--}}
                        {{--<li><a href="services.html">Services</a></li>--}}
                        <li><a href="/gallery">Gallery</a></li>
                        {{--<li><a href="price.html">Pricing</a></li>--}}
                        {{--<li class="menu-has-children"><a href="">Blog</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="blog-home.html">Blog Home</a></li>--}}
                        {{--<li><a href="blog-single.html">Blog Single</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="menu-has-children"><a href="">Pages</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="elements.html">Elements</a></li>--}}
                        {{--<li class="menu-has-children"><a href="">Level 2 </a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#">Item One</a></li>--}}
                        {{--<li><a href="#">Item Two</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="contact.html">Contact</a></li>--}}
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
@show

@yield('content')



<!-- start footer Area -->
@section('footer')
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p>
                            We have tested a number of registry fix and clean utilities and present our top 3 list on
                            our site for your convenience.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Categories</h4>
                        <p class="single-footer-widget"><a href="{{url('/gallery')}}">All</a></p>
                        <div class="" id="mc_embed_signup">
                                <div class=" single-footer-widget">
                                    @foreach(App\Category::all() as $category)
                                        <div><a href="/category/{{$category->id}}">{{$category->title}}</a></div>
                                    @endforeach
                                    {{--<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">--}}
                                    {{--<div class="input-group-btn">--}}
                                    {{--<button class="btn btn-default" type="submit">--}}
                                    {{--<span class="lnr lnr-arrow-right"></span>--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    <div class="info"></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Contact Info</h4>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@show
<!-- End footer Area -->

<script src="{{asset('js/template/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/template/popper.min.js')}}"></script>
<script src="{{asset('js/template/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('js/template/easing.min.js')}}"></script>
<script src="{{asset('js/template/hoverIntent.js')}}"></script>
<script src="{{asset('js/template/superfish.min.js')}}"></script>
<script src="{{asset('js/template/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/template/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/template/jquery.tabs.min.js')}}"></script>
<script src="{{asset('js/template/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/template/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/template/waypoints.min.js')}}"></script>
<script src="{{asset('js/template/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/template/simple-skillbar.js')}}"></script>
<script src="{{asset('js/template/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/template/mail-script.js')}}"></script>
<script src="{{asset('js/template/main.js')}}"></script>
</body>
</html>