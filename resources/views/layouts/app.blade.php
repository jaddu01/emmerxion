<!DOCTYPE html>
<html class="no-js">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') {{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Font Family CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/cerebrisans.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/linea-icons.css')}}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate-text.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@stack('styles')
</head>
<body>
@include("partials.header")
<div id="main-wrapper">
@yield("content")
</div>
@include("partials.footer")

<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
@stack('scripts')
</body>
</html>
