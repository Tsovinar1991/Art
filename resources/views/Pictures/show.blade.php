@extends('layouts.app')

@section('title', 'Gallery')


@section('content')


<!-- start banner Area -->
<section class="about-banner" >
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery
                </h1>
                <p class="text-white link-nav"><a href="/">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="{{url('/gallery')}}">Gallery</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="">Art Work</h1>
                </div>
            </div>
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
                    <div class="">
                        <div class="thumb">
                            <div class=""></div>
                            <img class="image img-fluid" src="/storage/pictures/{{$p->image}}" alt="">
                        </div>
                    </div>
                    <div class="p-inner">
                        <h4>{{$p->title}}</h4>
                        <p>{{$p->description}}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection


