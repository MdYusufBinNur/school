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
                            <h2 class="text-theme-colored2 font-36">Contact Us </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: About -->
        <section class="mt-20" data-bg-img="" style="background-color: rgba(93,134,99,0.16)" >
            <div class="container">
                <div class="section-title text-center">
                    {{--<div class="row">--}}
                        {{--<div class="col-md-8 col-md-offset-2">--}}
                            {{--<h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">

                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    <span> {{ Session::get('success') }}</span>
                                </div>
                        @endif
                            <!-- Contact Form -->
                            <form method="POST" action="{{ url('/web_message_us') }}" accept-charset="UTF-8" class="contact-form-transparent" enctype="multipart/form-data">
                                {{--<input name="_token" type="hidden" value="pJyKcgswmYN0ZBtkOCIPXKBiu9AovgKTrAs9OL0a">--}}
                                @csrf()
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <small>*</small></label>
                                            <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <small>*</small></label>
                                            <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject <small>*</small></label>
                                            <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark  btn-block" value="submit">Send your message</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid pt-0 pb-0">
                <div class="row text-center">
                    <div>
                        <h2 class=" font-36"  style="color: black">GET THE DIRECTION</h2>
                    </div>

                <div class="col-md-10 col-md-offset-1">

                    {{--https://www.google.com/maps/place/%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A6%BE%E0%A6%B6%E0%A6%BE+%E0%A6%AC%E0%A6%B9%E0%A7%81%E0%A6%AE%E0%A7%81%E0%A6%96%E0%A7%80+%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9A+%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC,+%E0%A6%89%E0%A6%A4%E0%A7%8D%E0%A6%A4%E0%A6%B0+%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A6%BE%E0%A6%B0%E0%A6%B8%E0%A6%BE/@22.4647913,91.850676,16z/data=!4m5!3m4!1s0x30ad284ac13f0f57:0x140b1aa9408e3cfd!8m2!3d22.4650392!4d91.8524864--}}
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.683090694329!2d90.42217271558857!3d23.794296884567803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7bb09e07f35%3A0x939034ead40d7c5!2sCambrian+School+%26+College!5e0!3m2!1sen!2sbd!4v1524568176849" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14748.072712311914!2d91.84908140196892!3d22.4659511838936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad284ac13f0f57%3A0x140b1aa9408e3cfd!2sMadarsha%20Multilateral%20High%20School%2C%20North%20Madarsha!5e0!3m2!1sen!2sbd!4v1569087875747!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    {{--AIzaSyCaElQyMCbsyjftm6nbFJxPDkN7G0rcRrA--}}

                </div>
                </div>

            </div>
        </section>
    </div>
@endsection
{{--@section('script')
    <script>
        function initMap() {
            let location = {lat: -25.363, lng:131.044};
            let  map = new google.maps.Map(document.getElementById('map'),{
                zoom: 4,
                center: location
            });
            let marker = new google.maps.Map({
                position: location,
                map: map
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaElQyMCbsyjftm6nbFJxPDkN7G0rcRrA&calback=initMap"></script>
@endsection--}}

