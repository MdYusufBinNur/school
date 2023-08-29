<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('web.includes.head')

<body class="">



<div id="wrapper" class="clearfix">

    <!-- Popup Code Start Code-->

    <!-- Popup Code End Code-->


    @include('web.includes.header')
    <!-- Start main-content -->

    @yield('body')
    <!-- end main-content -->


    <div id="preloader">
        <div id="spinner">
            <img src="{{ url('web_assets/fontend-assets/images/preloaders/5.gif') }}" alt="">
        </div>
    </div>

    @include('web.includes.footer')

</div>
<!-- end wrapper -->

</body>

</html>

