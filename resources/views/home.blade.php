@extends('layouts.app')

@section('style')
    <style>
        .service {
            font-family: "Seaweed Script";
            color: #a5a098;
            text-align: center;
            font-size: 40px;
            position: relative;
            margin:0;
        }
        .service:before {
            content:"";
            display: block;
            position: absolute;
            z-index:-1;
            top: 50%;
            width: 100%;
            border-bottom: 3px solid #a5a098;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big  text-center">
                                        <i class="ti-slice"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Slider Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/slider') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/slider_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-slice"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Social Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/linker') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/linker_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-mobile"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Contact Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/contact') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/contact_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Address Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/address') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/address_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-info"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>About Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/about') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/about_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Message Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/message') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/message_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-notepad"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Notice Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/notice') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/notice_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-face-smile"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Facility Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/facility') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/facility_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Academic Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/academy') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/academy_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-user"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Member Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/member') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/member_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-agenda"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>News&Event Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/news_events') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/news_events_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12 text-center">
                    {{--<hr style="height: 20px;border-color: #a5a098">--}}
                    <p class="service"><button class="btn" style="background-color: #66615B; color: white">GALLERY</button></p>
                    {{--<button class="btn btn-block" style="background-color: #66615B; color: white">SERVICES</button>--}}
                </div>
                <div class="col-lg-3 col-sm-6"></div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-camera"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>
                                            Photo Gallery Information
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="{{ url('/gallery') }}" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="{{ url('/gallery_list') }}" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big   text-center">
                                        <i class="ti-video-camera"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Video Gallery Information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                <a href="#?" class="btn btn-success btn-fill btn-icon btn-sm">
                                    <i class="ti-plus"></i>
                                </a></div>
                            <div class="pull-right">
                                <a href="#?" class="btn btn-default btn-fill btn-icon btn-sm">
                                    <i class="ti-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
