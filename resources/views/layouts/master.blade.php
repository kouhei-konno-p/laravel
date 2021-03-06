<title>Laravel Layout</title>

<!-- Fontfaces CSS-->
<link href="{{{ URL::asset('css/font-face.css') }}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}}" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}}" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/wow/animate.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/slick/slick.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/select2/select2.min.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}}" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="{{{ URL::asset('css/theme.css')}}}" rel="stylesheet" media="all">
<link href="{{{ URL::asset('css/custom.css')}}}" rel="stylesheet" media="all">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->


</head>

<body class="animsition">
    <div class="page-wrapper">
    @include('partials.header') 
    @include('partials.sidebar')
        <div class="page-container3">
            @yield('content')
            <div class="col-sm-12">
                @include('partials.footer')
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{{ URL::asset('vendor/jquery-3.2.1.min.js')}}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{{ URL::asset('vendor/bootstrap-4.1/popper.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.js')}}}"></script>
    <!-- Vendor JS       -->
    <script src="{{{ URL::asset('vendor/slick/slick.min.js')}}}">
    </script>
    <script src="{{{ URL::asset('vendor/wow/wow.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/animsition/animsition.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}}">
    </script>
    <script src="{{{ URL::asset('vendor/counter-up/jquery.waypoints.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/counter-up/jquery.counterup.min.js')}}}">
    </script>
    <script src="{{{ URL::asset('vendor/circle-progress/circle-progress.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/chartjs/Chart.bundle.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/select2/select2.min.js')}}}">
    </script>

    <!-- Main JS-->
    <script src="{{{ URL::asset('js/main.js')}}}"></script>

</body>