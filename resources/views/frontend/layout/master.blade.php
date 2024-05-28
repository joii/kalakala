
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale = 1.0,
maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Special+Elite&display=swap" rel="stylesheet">

<title>@yield('title') | Kalakala</title>

<!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">  -->

<link href="{{ asset('frontend/assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/aos.css')}}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/swiper.css')}}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/global.css')}}" rel="stylesheet">

<link href="{{ asset('frontend/assets/css/fullpage.css')}}" rel="stylesheet">

</head>
<body>
    <div class="preload">
        <span class="loader"></span>
    </div>

    <div class="page {{ $pagename=='home'?'page-fullpage p-0':'' }}" style="--page-bg:@yield('bgcolor');">
        <!-- Header Nav -->
        @include('frontend.layout.header')
        <!-- Navbar -->
        @include('frontend.layout.navbar')
        <!-- Main Content -->
        @yield('content')

    </div><!--page-->

    <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>


</body>
</html>
