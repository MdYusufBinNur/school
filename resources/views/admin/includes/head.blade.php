<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MADARSHA ML HIGH SCHOOL</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('paper_dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('paper_dashboard/assets/css/paper-dashboard.css') }}" rel="stylesheet">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link  href="{{ asset('paper_dashboard/assets/css/demo.css') }}" rel="stylesheet">

    <link href="{{ asset('paper_dashboard/assets/css/themify-icons.css') }}" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">


    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    @yield('style')

</head>
