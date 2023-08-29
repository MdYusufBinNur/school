<div class="sidebar" data-background-color="brown" data-active-color="danger">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    <div class="logo">
        <a href="{{ url('/home') }}" class="simple-text logo-mini">
            <i class="ti-pulse"></i>
        </a>

        <a href="{{ url('/home') }}" class="simple-text logo-normal">
            MMLHS
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <div class="photo">
                    <img src="{{ asset('paper_dashboard/assets/img/faces/face-2.jpg') }}" />
                </div>

                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                                <span style="font-variant-caps: all-petite-caps">
                                    {{ \Illuminate\Support\Facades\Auth::user()->name }}
                                    <b class="caret"></b>
                                </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            {{--<a href="{{ route('logout') }}">--}}
                                {{--<span class="sidebar-mini"></span>--}}
                                {{--<span class="sidebar-normal">Logout</span>--}}
                            {{--</a>--}}

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <span class="sidebar-mini"><i class="ti-signal"></i></span>
                                <span class="sidebar-normal">
                                    {{ __('Logout') }}
                                </span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li>
                <a data-toggle="collapse" href="#slider">
                    <i class="ti-crown"></i>
                    <p>Slider
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="slider">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/slider') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Slide</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/slider_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Slider Info List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#linker">
                    <i class="ti-panel"></i>
                    <p>Social Linker
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="linker">
                    <ul class="nav">
                        <li class="">
                            <a href="{{ url('/linker') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Linker</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/linker_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Linker List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="ti-mobile"></i>
                    <p>Contact
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/contact') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Contact Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Contact Info List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact_page_list') }}">
                                <span class="sidebar-mini"><i class="ti-envelope"></i></span>
                                <span class="sidebar-normal">Messages</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#address">
                    <i class="ti-location-pin"></i>
                    <p>Address
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="address">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/address') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Address Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/address_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Address List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#about">
                    <i class="ti-info"></i>
                    <p>School About
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="about">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/about') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New About Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/about_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">About Info List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#message">
                    <i class="ti-envelope"></i>
                    <p>Corner Message
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="message">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/message') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">New Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/message_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Message List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#notice">
                    <i class="ti-notepad"></i>
                    <p>Notice
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="notice">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/notice') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">New Notice</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/notice_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Notice List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#gallery">
                    <i class="ti-camera"></i>
                    <p>Photography
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="gallery">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/gallery') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Gallery Info List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#facility">
                    <i class="ti-drupal"></i>
                    <p>Facility
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="facility">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/facility') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Facility Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/facility_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Facility Info List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#member">
                    <i class="ti-user"></i>
                    <p>Faculty Member
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="member">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/member') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Member Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/member_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Member List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#news_events">
                    <i class="ti-new-window"></i>
                    <p> News&Events
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="news_events">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/news_events') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New News&Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/news_events_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">News&Events List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#academy">
                    <i class="ti-drupal"></i>
                    <p>Academy
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="academy">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/academy') }}">
                                <span class="sidebar-mini"><i class="ti-plus"></i></span>
                                <span class="sidebar-normal">Add New Academy Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/academy_list') }}">
                                <span class="sidebar-mini"><i class="ti-list"></i></span>
                                <span class="sidebar-normal">Academy Info List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
