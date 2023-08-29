@extends('web.web_master')

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
                                <li class="active">Categorized Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Single Gallery code start here -->
        <section class="mt-20">
            <div class="container pb-sm-70 ">


                <div class="gallery-isotope default-animation-effect grid-4 bg-white gutter-small clearfix" data-lightbox="gallery">
                    <h5 class="text-center"> {{ $all_galleries->gallery_title }} </h5>
                    @if(!empty($all_galleries))
                            @foreach (json_decode($all_galleries->gallery_images) as $image)
                            <div class="col-12 col-sm-6 col-md-3 mb-2 mt-20 ">

                                <div class="card">
                                    <div class="card-block">
                                            <a href="{{ '../'.$image }}" data-lightbox="gallery-item">
                                                <img class="card-img-top" style="max-height: 100%" height="200px" width="auto" src="{{ '../'.$image }}" alt="Card image cap">
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
