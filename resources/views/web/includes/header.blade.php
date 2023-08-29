
<header id="header" class="header">
    <div class="header-top  sm-text-center style-bordered">
        <div class="container-fluid text-center">
            <img src="{{ url('web_assets/fontend-assets/images/school_name/home_header_file.png') }}" alt="">

        </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord no-bg">
                    {{--<a class="menuzord-brand pull-left flip mb-15" href="https://www.cambrian.edu.bd">
                        <img src="https://www.cambrian.edu.bd/upload/1555845861.png" alt="">
                    </a>--}}
                    <ul class="menuzord-menu">
                        <li class=""><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/web_about') }}">About Us</a></li>

                        <li><a href="#?">Messages</a>
                            <ul class="dropdown corner_message" >

                                @if(!empty($messages))
                                    @foreach($messages as $message)
                                        <li><a href="{{ '../web_message/'.$message->id }}" onclick="setup()">{{ $message->designation }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li><a href="#">Facilities</a>
                            <ul class="dropdown">
                                @if(!empty($all_facilities))
                                @foreach($all_facilities as $facility)
                                     <li><a href="{{ '../web_facility/'.$facility->facility_name }}">{{ $facility->facility_name }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        {{--<li><a href="#">Admission</a>--}}
                            {{--<ul class="dropdown">--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/admission-information">Admission Information</a></li>--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/admission-agreements">Admission Agreement</a></li>--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/admission-form">Admission Form</a></li>--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/admission-suspension">Admission Suspension</a></li>--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/exam-regulations">Exam Regulations</a></li>--}}
                                {{--<li><a href="https://www.cambrian.edu.bd/transfer-procedures">Transfer Procedures</a></li>--}}
                                {{--<li><a href="https://drive.google.com/file/d/1KS4Hk04Hrk20DMYzTv25-jzv1ZdWHn2B/view?usp=sharing" target="_blank">Prospectus</a></li>--}}
                                {{--<li><a href="https://bsbbd.com/" target="_blank">Scholarship</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="#">Academic</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/web_news_events') }}">News & Events</a></li>
                                @if(!empty($academics))
                                    @foreach($academics as $academy)
                                        <li><a href="{{ '../web_academy/'.$academy->academy_name }}">{{ $academy->academy_name }}</a></li>
                                    @endforeach
                                @endif


                            </ul>
                        </li>
                        <li><a href="{{ url('web_notice') }}">Notice</a>

                        </li>

                        <li><a href="">Gallery</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/web_gallery') }}">Photo Gallery</a></li>
                                <li><a href="{{ url('/web_video') }}">Video Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Administration</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/web_member_info/govt_body') }}">Management Committee</a></li>
                                <li><a href="{{ url('/web_member_info/member') }}">Faculty Member</a></li>
                                <li><a href="{{ url('/web_member_info/teacher') }}">Teachers</a></li>
                                {{--<li><a href="{{ url('/web_member_info/teacher') }}">Notice Board</a></li>--}}
                                {{--<li><a href="">Job & Vacancies</a></li>--}}

                            </ul>

                        <li><a href="{{ url('web_contact') }}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
