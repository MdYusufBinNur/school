@extends('web.web_master')

@section('body')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('web_assets/fontend-assets/images/common_image.jpg') }}">
            <div class="container">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Video Gallery</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Video</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container mt-20">
                <div class="row" id="video_gallery">

                    {{--@if(!empty($videoList))--}}
                        {{--@foreach( $videoList as $item)--}}
                            {{--@if(isset($item->id->videoId))--}}
                                {{--<div class="col-sm-6 col-md-4">--}}
                                    {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->id->videoId }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                    {{--</div>--}}
                                    {{--<div class="video_cont">--}}
                                        {{--<h4>{{ $item->snippet->title }}</h4>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                    {{--@endif--}}



                    {{--<div class="col-sm-6 col-md-4">--}}
                        {{--<div class="embed-responsive embed-responsive-16by9">--}}
                            {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/bh-3NNLNet8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                        {{--</div>--}}
                        {{--<div class="video_cont">--}}
                            {{--<h4>ক্যামব্রিয়ান কলেজের নবীনবরণ - ২০১৮</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>

        </section>
    </div>
@endsection
