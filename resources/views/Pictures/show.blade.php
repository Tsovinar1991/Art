@extends('layouts.app')

@section('title', 'Gallery')


@section('content')


    <!-- start banner Area -->
    <section class="about-banner  background_about">
        <div class="container " >
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Gallery
                    </h1>
                    {{--<p class="text-white link-nav"><a href="/">Home </a>--}}
                    {{--<span class="lnr lnr-arrow-right"></span>--}}
                    {{--<a href="/gallery">Gallery</a></p>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start portfolio-area Area -->
    <section class="portfolio-area section-gap" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Art works</h1>
                        <p>Who are in extremely in love with art.</p>
                    </div>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    @foreach($categories as $category)
                        <li data-filter=".ui">{{$category->title}}</li>
                    @endforeach
                </ul>
            </div>

            {{--<div class="filters">--}}
            {{--<ul>--}}
            {{--<li class="active" data-filter="*">All</li>--}}
            {{--<li data-filter=".vector">Vectorn</li>--}}
            {{--<li data-filter=".raster">Raster</li>--}}
            {{--<li data-filter=".ui">UI/UX</li>--}}
            {{--<li data-filter=".printing">Printing</li>--}}
            {{--</ul>--}}
            {{--</div>--}}

            <div class="filters-content">
                <div class="row   d-flex align-items-center justify-content-center">
                    <div class=" col-sm-5 all raster center ">
                        <div class="p-inner">
                            <h4>{{$p->title}}</h4>
                            <p>{{$p->description}}</p>
                        </div>
                        <div class="">
                            <div class="thumb">
                                <div class=""></div>
                                <img class="f-img image img-fluid rounded  mx-auto " src="{{asset('images/'.$p->image)}}" alt="">
                            </div>
                        </div>
                        <div class="p-inner">
                            <h6>Price: {{$p->price}}</h6>
                            <p class="single-recent-blog a"><a href="">Autor:   <span class="autor">{{$p->autor}}</span></a></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection