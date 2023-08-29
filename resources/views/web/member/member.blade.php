
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
                            @if(!empty($type))
                                <h2 class="text-theme-colored2 font-36">{{ $type }} </h2>
                            @else
                                <h2 class="text-theme-colored2 font-36">Member </h2>
                            @endif

                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                @if(!empty($type))
                                    <li class="active">{{ $type }}</li>
                                @else
                                    <li class="active">Member</li>
                                @endif

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Member -->
        <section class="mt-20">
            <div class="container">
                <div class="row">
                    @if(!empty($all_members))
                    @foreach($all_members as $all_member)
                            <div class="col-sm-12 col-md-4 mt-20">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ asset($all_member->image) }}" alt="Card image cap" width="288px" height="364.8px">
                                    <div class="card-body" style="background-color: #14d339;">
                                        <h2 class="card-title" style="color: white">{{ $all_member->name }}</h2>
                                        <h4 class="card-text" style="color: white">{{ $all_member->designation }}</h4>
                                        {{--<h4 class="card-text" style="color: white">{{ $all_member->member_type }}</h4>--}}

                                    </div>
                                </div>
                            </div>

                    @endforeach
                    @endif

                </div>
            </div>
        </section>
    </div>
@endsection

