<?php
/**
 * Created by PhpStorm.
 * User: yusuf
 * Date: 9/15/2019
 * Time: 1:58 AM
 */
?>

@extends('web.web_master')

@section('body')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="">
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
                <div class="row" id="corner_message">


                </div>
            </div>

        </section>
    </div>
@endsection
