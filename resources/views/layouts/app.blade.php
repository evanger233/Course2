<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authar</title>

    <!-- favicon -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/docs.css')}}">

    <!-- bootstrap-icon -->
    <link rel="stylesheet" href="{{asset('static/css/all.css')}}">

    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{asset('static/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="static/css/owl.theme.default.min.css">

    <!-- animation -->
    <link rel="stylesheet" href="{{asset('static/css/animate.css')}}">

    <!-- media -->
    <link rel="stylesheet" href="{{asset('static/css/media.css')}}">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('static/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入 Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <div id="loader"></div>

    <!-- header -->
    @include('layouts.header')
    
    @yield('content')

    <br>
    @include('layouts.footer')
    
        <!-- all -->
        <script src="{{asset('static/js/jquery.min.js')}}"></script>

<!-- owl-carousel -->
<script src="{{asset('static/js/owl.carousel.min.js')}}"></script>

<!-- animation -->
<script src="{{asset('static/js/wow.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{asset('static/js/bootstrap.bundle.min.js')}}"></script>

<!-- swiper-js -->
<script src="{{asset('static/js/swiper.js')}}"></script>

<!-- loader -->
<script src="{{asset('static/js/loader.js')}}"></script>

<!-- header -->
<script src="{{asset('static/js/header.js')}}"></script>

<!-- custom -->
<script src="{{asset('static/js/custom.js')}}"></script>

</body>

</html>