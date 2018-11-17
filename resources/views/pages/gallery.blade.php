@extends('layouts/app')

@section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <div class="content">
                <div id="gallery">
                    <figure>
                        <div id="gallery">
                        <header class="heading">Art Gallery</header>
                        <div class="group team">
                            @foreach($data as $d)
                            <figure class="one_quarter"><a class="imgover" href="{{url('show/' . $d->id)}}"><img src="/storage/pictures/{{$d->image}}"
                                                                                               alt=""></a><figcaption>
                                    <h6 class="heading">{{$d->title}}</h6>
                                    <em>{{$d->description}}</em>
                                    <footer>
                                    </footer>
                                </figcaption>
                            </figure>
                            @endforeach
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
                        <figcaption>Gallery Description Goes Here</figcaption>
                        </div>
                    </figure>
                </div>


                <nav class="pagination">
                    <ul>
                        <li><a href="#">&laquo; Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><strong>&hellip;</strong></li>
                        <li><a href="#">6</a></li>
                        <li class="current"><strong>7</strong></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><strong>&hellip;</strong></li>
                        <li><a href="#">14</a></li>
                        <li><a href="#">15</a></li>
                        <li><a href="#">Next &raquo;</a></li>
                    </ul>
                </nav>
            </div>
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>

@endsection