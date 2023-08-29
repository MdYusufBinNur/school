@extends('web.web_master')
@section('style')
    <link href="{{ url('web_assets/fontend-assets/css/home/new_home.css') }}" rel="stylesheet"/>
@endsection
@section('body')
    <div class="main-content">
        <!-- Banner Area code Start  -->

        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="owl-carousel-1col" data-nav="true">
                            @if(!empty($sliders))
                            @foreach($sliders as $slider)
                                    <div class="item text-center">
                                        <img src="{{ $slider->slider_image }}" alt="{{ asset('Slider_Image/11.jpg') }}" class="img-responsive" style="max-height: 100%" width="100%">
                                    </div>
                            @endforeach
                            @endif
                            {{--<div class="item">--}}
                                {{--<img src="{{ asset('Slider_Image/11.jpg') }}" alt="1558337093.jpg" class="img-responsive" width="100%">--}}
                            {{--</div>--}}
                            {{--<div class="item ">--}}
                                {{--<img src="{{ asset('Slider_Image/11.jpg') }}" alt="1563425188.jpg" class="img-responsive" width="100%">--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--<style>--}}
            {{--.MarCont{--}}
                {{--background-color: #f7f7f7;--}}
                {{--height: 60px;--}}
            {{--}--}}

            {{--.MarCont h3{--}}
                {{--width: 100%;--}}
                {{--color: #000;--}}
                {{--font-size: 25px;--}}
                {{--text-align: center;--}}
            {{--}--}}
        {{--</style>--}}

        {{--About us section--}}
        <section id="about_us" class="bg-lighter mt-20 mb-20"  >
            <div class="container mt-20 pb-sm-90">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h2 class="mt-20 mt-sm-30 line-height-1 line-bottom-edu">About  <span class="text-theme-colored3">Us</span></h2>

                            @if(!empty($abouts))
                                <p class="font-15 text-justify text-black">
                                    {{  substr($abouts->title_description,0,600) }}
                                </p>
                            @endif


                            <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30 float-right" href="{{ url('/web_about') }}">Read more</a>
                        </div>

                        <div class="col-sm-12 col-md-6 mt-20 mb-20 ">
                            @if(!empty($abouts))
                                <img src="{{ $abouts->title_image  }}" alt="">
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section:Message, Notice Board code Start  -->
        <section id="corner_message">
            <div class="container mt-20 pb-sm-90">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu ">Our  <span class="text-theme-colored3">Messages</span></h2>
                            <div class="owl-carousel-1col" data-nav="true">

                                @if(!empty($corner_messages))
                                @foreach($corner_messages as $corner_message)
                                        <div class="item">
                                            <div class="testimonial-wrapper bg-silver-light form-boxshadow text-center">
                                                <div class="content">
                                                    <a class=" mb-15 display-block" href="{{ url('message/'.$corner_message->id ) }}">
                                                        <img alt="Ln. M. K. Bashar PMJF" src="{{ $corner_message->image }}" class="" height="340px" width="340px">
                                                    </a>
                                                    <h4 class="service-box-title font-20 font-weight-800">{{ $corner_message->name	 }}</h4>
                                                    <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">{{ $corner_message->designation	 }}</span><br>
                                                    <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">{{ $corner_message->group	 }}</span>
                                                </div>
                                            </div>
                                        </div>

                                @endforeach
                                @endif

                               {{-- <div class="item">
                                    <div class="testimonial-wrapper bg-silver-light form-boxshadow text-center">
                                        <div class="content">
                                            <a class=" mb-15 display-block" href="https://www.cambrian.edu.bd/vice-chairman-message">
                                                <img alt="Adv. Ln. Kh. Salima Rowshan" src="https://www.cambrian.edu.bd/fontend-assets/images/testimonials/madam.jpg" class="">
                                            </a>
                                            <h4 class="service-box-title font-20 font-weight-800">এডভোকেট লায়ন খন্দকার সেলিমা রওশন</h4>
                                            <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">ভাইস চেয়ারম্যান</span><br>
                                            <span class="chirman font-18 font-weight-600 mt-5  mt-sm-0">বিএসবি ক্যামব্রিয়ান এডুকেশন গ্রুপ</span>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>

                        {{--Notice Section--}}
                        <div class="col-sm-6 col-md-6">
                            <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu"> Notice <span class="text-theme-colored3"> Board</span></h2>
                            <div class="bxslider bx-nav-top" data-minslides="4" >

                                @if(!empty($notices))
                                    @foreach($notices as $notice)

                                        <div class="event media mt-0 no-bg no-border">
                                            <div class="event-date media-left text-center flip bg-theme-colored pl-10">
                                                <ul class="mt-15 mt-sm-30">
                                                    <li class="font-20 text-white font-weight-600">{{ substr(\Carbon\Carbon::parse($notice->date)->day, 0,3) }}</li>

                                                </ul>
                                                <ul class="mt-15 mt-sm-30">
                                                    <li class="font-20 text-white font-weight-600">{{ substr(\Carbon\Carbon::parse($notice->date)->monthName, 0,3) }}</li>

                                                </ul>
                                            </div>
                                            <div class="media-body">
                                                <div class="event-content pull-left flip pl-20 pl-xs-10">
                                                    <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="{{ asset('/'.$notice->image) }}" target="_blank"> {{ $notice->title }}</a></h4>
                                                    <span class="mb-5 font-12 mr-10"><i class="fa fa-calendar mr-5 text-theme-colored"></i> {{ $notice->date }}</span>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif

                            </div>
                            <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30" href="{{ url('/web_notice') }}">All Notices</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section:Message, About and Notice code End  -->


        <!-- Section: Choose Us Code Start -->
        <section class="bg-lighter mt-20 mb-20">
            <div class="container  pb-sm-60">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8 mt-30 col-md-offset-2">
                            <h2 class="text-center line-height-1 mt-0">Why<span class="text-theme-colored3"> MADARSHA ML HIGH</span> SCHOOL ?</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">

                        <div class="col-md-12" >
                            <div class="kf_intro_des" >
                                <div class="kf_intro_des_caption" >
                                    <span><i class="fa fa-book font-32 text-black-50"></i></span>
                                    <h6>LIBRARY</h6>
                                </div>
                            </div>

                            <div class="kf_intro_des">
                                <div class="kf_intro_des_caption">
                                    <span><i class="fa fa-university font-32 text-black-50"></i></span>
                                    <h6>Smart Classroom</h6>
                                </div>
                            </div>

                            <div class="kf_intro_des">
                                <div class="kf_intro_des_caption">
                                    <span><i class="fa fa-user font-32 text-black-50"></i></span>
                                    <h6 >Expert Teacher</h6>
                                </div>
                            </div>

                            <div class="kf_intro_des">
                                <div class="kf_intro_des_caption">
                                    <span><i class="fa fa-laptop font-32 text-black-50"></i></span>
                                    <h6>Smart Lab</h6>
                                </div>
                            </div>

                            <div class="kf_intro_des">
                                <div class="kf_intro_des_caption">
                                    <span><i class="fa fa-plane font-32 text-black-50"></i></span>
                                    <h6>Debate Club</h6>

                                </div>
                            </div>

                            <div class="kf_intro_des">
                                <div class="kf_intro_des_caption">
                                    <span><i class="fa fa-trophy font-32 text-black-50"></i></span>
                                    <h6>Co-Curricular Activities</h6>
                                </div>
                            </div>

                        </div>
                       {{-- <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-desktop font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">আধুনিক বিজ্ঞানাগার</h3>
                                <p class="text-black">ক্যামব্রিয়ানের রয়েছে অত্যাধুনিক পদার্থ, রসায়ন, জীববিজ্ঞান ল্যাব ও ব্যবহারিক ক্লাস</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/lab">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-user font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">অভিজ্ঞ শিক্ষক</h3>
                                <p class="text-black">শিক্ষা প্রতিষ্ঠানের সবচেয়ে গুরুত্বপূর্ণ দিক হচ্ছে অভিজ্ঞ, প্রশিক্ষিত ও নিবেদিত প্রাণ শিক্ষকমন্ডলী। </p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/college-teacher.html">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-book font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">সমৃদ্ধ লাইব্রেরি  </h3>
                                <p class="text-black">এ প্রতিষ্ঠানে রয়েছে আধুনিক তথ্য ও বইসমৃদ্ধ লাইব্রেরি; যেখানে পাঠ্যবইয়ের পাশাপাশি বিভিন্ন বই রয়েছে।</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/library">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-university font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">স্মার্ট ক্লাসরুম </h3>
                                <p class="text-black">বাংলাদেশের শিক্ষাঙ্গনে অত্যাধুনিক মাত্র তিনটি স্মার্ট ক্লাস রুম রয়েছে। একটি আমাদের মাননীয় প্রধানমন্ত্রী শেখ..</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/smart-classroom">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-plane font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">স্কলারশিপ</h3>
                                <p class="text-black">উচ্চ মাধ্যমিক শেষ করার পরে বিদেশে উচশিক্ষার ক্ষেত্রে রয়েছে স্কলারশিপ সহ ভিসা সাপোর্ট সুবিধা</p>
                                --}}{{--<a class="wht_btn" href="https://bsbbd.com/" target="_blank">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-bus font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">ট্রান্সপোর্ট</h3>
                                <p class="text-black">ছাত্র ও ছাত্রীদের বাড়ি থেকে আনা নেয়ার জন্য রয়েছে পৃথক এসি/নন-এসি গাড়ির ব্যাবস্থা</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/transport">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-building-o font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">হোস্টেল</h3>
                                <p class="text-black">ছাত্র ছাত্রীদের জন্য ক্যাম্পাসের খুব কাছেই রয়েছে মনোরম পরিবেশে থাকা ও খাওয়ার সুব্যাবস্থা</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/hostel">Read More...</a>--}}{{--
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                <a href="#" class="icon icon-circled icon-md flip mb-20">
                                    <i class="fa fa-trophy font-32 text-white"></i>
                                </a>
                                <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">কো-কারিকুলার</h3>
                                <p class="text-black">প্রচলিত শিক্ষা পদ্ধতির পাশাপাশি রয়েছে প্রতিটি ছাত্র ছাত্রীদের জন্য জীবনমুখী শিক্ষা ব্যাবস্থা</p>
                                --}}{{--<a class="wht_btn" href="https://www.cambrian.edu.bd/co-curricular-activities">Read More...</a>--}}{{--
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Choose Us Code End -->

    </div>
@endsection
