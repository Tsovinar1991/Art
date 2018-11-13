<!DOCTYPE html>
<html lang="">
<head>
    <title>Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url({{asset('images/4.jpg')}});">
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <h1><a href="">ShineArt</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="{{url('/gallery')}}">Gallery</a></li>
                            <li><a href="{{url('/painters')}}">Painters</a></li>
                            {{--<li><a href="pages/sidebar-left.html">Sidebar Left</a></li>--}}
                            {{--<li><a href="pages/sidebar-right.html">Sidebar Right</a></li>--}}
                            {{--<li><a href="pages/basic-grid.html">Basic Grid</a></li>--}}
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
                    {{--<li><a href="#">Gallery</a></li>--}}
                </ul>
            </nav>
        </header>
    </div>
    <div id="pageintro" class="hoc clear">
        <article>
            <h3 class="heading">Original Art Works</h3>
            <p>Shop millions of handmade and vintage items on the world’s most imaginative marketplace.</p>
            {{--<p class="font-x1 uppercase bold">Felis vitae ultricies blandit</p>--}}
            {{--<footer><a class="btn" href="#">About Us</a></footer>--}}
        </article>
    </div>
</div>

<div class="wrapper row2">
    <section class="hoc container clear">
        <div class="sectiontitle">
            <h6 class="heading">Our works</h6>
        </div>
        <div class="group team">
            <figure class="one_quarter first"><a class="imgover" href="#"><img src="{{asset('images/6.jpg')}}"
                                                                               alt=""></a>
                <figcaption>
                    <h6 class="heading">A. Doe</h6>
                    <em>Eu urna pretium</em>
                    <footer>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/2.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">B. Doe</h6>
                    <em>Ullamcorper aliquam</em>
                    <footer>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/2.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">C. Doe</h6>
                    <em>Id dolor in est</em>
                    <footer>

                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/2.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">D. Doe</h6>
                    <em>Dignissim tempus</em>
                    <footer>
                    </footer>
                </figcaption>
            </figure>
        </div>
        <div class="sectiontitle">
            <div class="heading">
                <a href="{{url('/gallery')}}" class="btn">More</a>
            </div>
        </div>
    </section>
</div>


<div class="wrapper row2">
    <section class="hoc container clear">
        <div class="sectiontitle">
            <h6 class="heading">Our Painters</h6>
        </div>
        <div class="group team">
            <figure class="one_quarter first"><a class="imgover" href="#"><img src="{{asset('images/3.jpg')}}"
                                                                               alt=""></a>
                <figcaption>
                    <h6 class="heading">A. Doe</h6>
                    <em>Eu urna pretium</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/3.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">B. Doe</h6>
                    <em>Ullamcorper aliquam</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/3.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">C. Doe</h6>
                    <em>Id dolor in est</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="{{asset('images/3.jpg')}}" alt=""></a>
                <figcaption>
                    <h6 class="heading">D. Doe</h6>
                    <em>Dignissim tempus</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
        </div>
        <div class="sectiontitle">
            <div class="heading">
                <a href="{{url('/painters')}}" class="btn">More</a>
            </div>
        </div>
    </section>
</div>
<div class="wrapper bgded overlay" style="background-image:url({{asset('images/2.jpg')}});">
    <div class="hoc container testimonials clear">
        <article><img src="{{asset('')}}" alt="">
            <blockquote>Painting is poetry that is seen rather than felt, and poetry is painting that is felt rather
                than seen.
            </blockquote>
            <h6 class="heading font-x1">Leonardo da Vinci</h6>
        </article>
    </div>
</div>

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
