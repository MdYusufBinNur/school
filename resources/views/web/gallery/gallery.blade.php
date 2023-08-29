@extends('web.web_master')
@section('style')

@endsection
@section('body')
    <div class="main-content bg-white-f3">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('web_assets/fontend-assets/images/common_image.jpg') }}">
            <div class="container">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Gallery</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Single Gallery code start here -->
        <section class="mt-20">
            <div class="container pb-sm-70 ">


                <div class="gallery-isotope default-animation-effect grid-4 bg-white gutter-small clearfix mt-20" data-lightbox="gallery">

                    @if(!empty($all_galleries))
                        @foreach($all_galleries as $all_gallery)

                            <div class="col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        {{--<p class="card-text">--}}
                                            {{--<small class="text-muted" style="margin-left: 5px">{{ $blog->date }}</small>--}}
                                        {{--</p>--}}
                                        @foreach (json_decode($all_gallery->gallery_images) as $image)
                                            <a href="{{ url('/web_categorized_gallery/'.$all_gallery->id) }}">
                                                <img class="card-img-top"  style="max-height: 100%; " id="img" height="200px" width="auto" src="{{ $image }}" alt="Card image cap"  data-toggle="tooltip" data-placement="top" title="Click to see more">
                                            </a>
                                            @break
                                        @endforeach

                                        <a  href="{{ url('/web_categorized_gallery/'.$all_gallery->id) }}">
                                            <p class="card-title" data-toggle="tooltip" data-placement="bottom" title="Click to see more" >
                                                <strong style="margin-left: 5px">{{ $all_gallery->gallery_title }}</strong>
                                            </p>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </div>


            </div>
        </section>


    </div>

@endsection
