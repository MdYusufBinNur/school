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
                            <h2 class="text-theme-colored2 font-36">Message </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Message</li>
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
                    <div class="col-md-12 messege">
                        @if(!empty($message))
                            <img class="pull-left flip mr-15 thumbnail" src="{{ asset($message->image) }}" alt="" width="300px" height="400px">




                        <p>{{ $message->message }}</p>

                        <ul>

                            <p> {{ $message->name }}</p>
                            <li> {{ $message->designation }}</li>
                            <li>{{ $message->group }}</li>
                        </ul>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
