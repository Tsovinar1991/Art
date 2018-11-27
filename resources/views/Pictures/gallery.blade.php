@extends('layouts.app')

@section('title', 'Gallery')


@section('content')


    <!-- start banner Area -->
    <section class="about-banner  background_about">
        <div class="container ">
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
                        <h1 class="mb-10">My Latest Featured Works</h1>
                        <p>Who are in extremely in love with art.</p>
                    </div>
                </div>
            </div>

            <div class="filters">
                <ul>
                    <a href="{{url('/gallery')}}">
                        <li class="" data-filter="*">All</li>
                    </a>
                    @foreach($categories as $category)
                        <li data-filter=".ui"><a href="/category/{{$category->id}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>

            @if(count($data)>0)
                <div class="row">
                    @foreach($data as $d)
                        <div class="single-recent-blog col-lg-4 col-md-4">
                            <a href="#">
                                <h4>{{$d->title}}</h4>
                            </a>

                            <div class="thumb">
                                <a href="/show/{{$d->id}}"><img class="f-img img-fluid mx-auto" src="{{asset('images/'.$d->image)}}" alt=""></a>
                            </div>
                            <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                                <div>
                                    <img class="img-fluid" src="" alt="">
                                    <a href="#"><span>{{$d->autor}}</span></a>
                                </div>
                                <div class="meta">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-bubble"></span>
                                </div>
                            </div>
                            {{--<p>{{$d->description}}</p>--}}
                        </div>
                    @endforeach
                </div>
            @else
                <div class="">
                    <h3> Sorry there are no pictures.</h3>
                </div>
            @endif

            {!! $data->links()!!}


            {{--<div class="filters-content">--}}
            {{--<div class="row grid">--}}
            {{--@foreach($data as $d)--}}
            {{--<div class=" col-sm-4 all raster">--}}
            {{--<div class="single-recent-blog">--}}
            {{--<div class="thumb">--}}
            {{--<a href="/show/{{$d->id}}"><img class="f-img image img-fluid rounded  mx-auto " src="/storage/pictures/{{$d->image}}" alt=""></a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="p-inner">--}}
            {{--<h4>{{$d->title}}</h4>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}

            {{--</div>--}}

        </div>
    </section>
@endsection
