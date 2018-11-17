<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<div class="bgded overlay" style="background-image:url({{asset('images/4.jpg')}});">
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <h1><a href="/">ShineArt</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active"><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="{{url('/gallery')}}">Gallery</a></li>
                            <li><a href="{{url('/painters')}}">Painters</a></li>
                            {{--<li><a href="sidebar-left.html">Sidebar Left</a></li>--}}
                            {{--<li class="active"><a href="sidebar-right.html">Sidebar Right</a></li>--}}
                            {{--<li><a href="basic-grid.html">Basic Grid</a></li>--}}
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Categories</a>
                        <ul>
                            <li><a href="">Paintings</a></li>
                            <li><a href="">Photography</a></li>
                            <li><a href="">Drawings</a></li>
                            <li><a href="">Graphic</a></li>
                            <li><a href="">Design</a></li>
                        </ul>
                    </li>
                    {{--<li><a class="drop" href="#">Dropdown</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Level 2</a></li>--}}
                            {{--<li><a class="drop" href="#">Level 2 + Drop</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Level 3</a></li>--}}
                                    {{--<li><a href="#">Level 3</a></li>--}}
                                    {{--<li><a href="#">Level 3</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Level 2</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">Link Text</a></li>--}}
                    {{--<li><a href="#">Link Text</a></li>--}}
                </ul>
            </nav>
        </header>
    </div>
    <section id="breadcrumb" class="hoc clear">
        <div class="">
            <span style ='margin-right:40px;'><a href="">ABOUT</a></span>
            <span ><a href="">CONTACT</a></span>
        </div>
        <!-- ################################################################################################ -->
        {{--<ul>--}}
            {{--<li><a href="#">Home</a></li>--}}
            {{--<li><a href="#">Lorem</a></li>--}}
            {{--<li><a href="#">Ipsum</a></li>--}}
            {{--<li><a href="#">Dolor</a></li>--}}
        {{--</ul>--}}
        <!-- ################################################################################################ -->

    </section>
</div>

@yield('content')

<div class="wrapper row4">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
            <h6 class="heading">Our Services</h6>
            <p>We make it eazy to find beautiful art works.</p>
            <p>We`ll organize everything for comfortable service.</p>
        </div>
        <div class="one_third">
            <h6 class="heading">Intro</h6>
            <nav>
                <ul class="nospace">
                    <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </nav>
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
        {{--<div class="one_quarter">--}}
            {{--<h6 class="heading">Exebitions</h6>--}}
            {{--<article>--}}
                {{--<h2 class="nospace font-x1"><a href="#">Something</a></h2>--}}
                {{--<time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>--}}
            {{--</article>--}}
        {{--</div>--}}
        <div class="one_third">
            <h6 class="heading">Categories</h6>
            <ul class="nospace linklist">
                <li><a href="#">Paintings</a></li>
                <li><a href="#">Photography</a></li>
                <li><a href="#">Drawings</a></li>
                <li><a href="#">Graphic</a></li>
                <li><a href="#">Design</a></li>
            </ul>
        </div>
    </footer>
</div>
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Art.loc</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.backtotop.js')}}"></script>
<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
</body>
</html>
