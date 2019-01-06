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

    <button id ="ajaxSubmit">testing</button>
    <h2 id="testh"></h2>
    <div id = "cont"></div>
    <form action="">
        {{ csrf_field()}}
        <input type="text" id="f">
        <input type="text" id ="l">
        <button id="postclick">Send</button>
    </form>
    <!-- End banner Area -->
    <!-- Start portfolio-area Area -->
@endsection
