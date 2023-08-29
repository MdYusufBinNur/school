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
                            <h2 class="text-theme-colored2 font-36">Notice</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Notice</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section class="mt-20">
            <div class="container pb-sm-30">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-condensed table-striped table-bordered">
                                <tr>
                                    <th><strong> SL</strong></th>
                                    <th width="57%"><strong>Title</strong></th>
                                    <th><strong>Publish Date</strong></th>
                                    <th class="text-center"><strong>Action</strong></th>
                                </tr>
                                @if(!empty($notices))
                                    @foreach($notices as $key=>$notice)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td><a href="{{ asset($notice->image) }}" target="_blank">{{ $notice->title  }}</a></td>

                                        <td><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $notice->date }}</td>
                                        <td class="text-center"><a href="{{ asset($notice->image) }}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                    </tr>
                                    @endforeach
                                @endif

                            </table>
                        </div>
                    </div>
                    {{ $notices->links() }}
                </div>


            </div>

        </section>
    </div>
@endsection
