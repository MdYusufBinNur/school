<?php
/**
 * Created by PhpStorm.
 * User: yusuf
 * Date: 9/15/2019
 * Time: 1:15 AM
 */
?>
@extends('web.web_master')

@section('body')
    <div class="main-content">
        <!-- Section: inner-header -->
        @if(!empty($abouts))
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('web_assets/fontend-assets/images/common_image.jpg') }}">
            <div class="container">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">About</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Section: About -->
        <section>
            <div class="container pb-sm-30">
                @if(!empty($abouts))
                <div class="row mt-20">
                    <h2 class="mt-20 mt-sm-30 line-height-1 text-center">About  <span class="text-theme-colored3">Us</span></h2>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p class="text-center text-justify">{{ $abouts->title_description }}</p>
                    </div>
                </div>

                @endif

            </div>

        </section>
    </div>
@endsection
