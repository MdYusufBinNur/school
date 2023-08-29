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
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('web_assets/fontend-assets/images/common_image.jpg') }}">
            <div class="container">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Facility </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Facility</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: About -->
        <section class="mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pull-right flip sm-pull-none">

                        <!-- Start Slider -->
                        <div class="row-fluid">
                            <div class="span12">

                                <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner text-center">

                                        @if(!empty($facilities))
                                        <div class="item active">
                                            <div class="bannerImage">
                                                <a href="#"><img src="{{ asset($facilities->image) }}" alt=""></a>
                                            </div>

                                        </div>
                                            <div class="item ">
                                                <div class="bannerImage">
                                                    <a href="#"><img src="{{ asset($facilities->image) }}" alt=""></a>
                                                </div>

                                            </div>
                                            <div class="item ">
                                                <div class="bannerImage">
                                                    <a href="#"><img src="{{ asset($facilities->image) }}" alt=""></a>
                                                </div>

                                            </div>
                                        @endif

                                    </div>

                                    <div class="control-box">
                                        <a data-slide="prev" href="#myCarousel" class="carousel-control"></a>
                                        <a data-slide="next" href="#myCarousel" class="carousel-control"></a>
                                    </div><!-- /.control-box -->

                                </div><!-- /#myCarousel -->

                            </div><!-- /.span12 -->
                        </div><!-- /.row -->


                        <!-- Lab Description -->
                        <section style="padding-top: 20px">
                            <div class="panel panel-default">
                                @if(!empty($facilities))
                                <div class="panel-heading" style="background-color: #26CF47">{{ $facilities->facility_name }}</div>

                                <div class="panel-body">
                                    <p class="text-black">
                                        {{ $facilities->facility_description }}
                                    </p>
                                </div>
                                @endif

                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
