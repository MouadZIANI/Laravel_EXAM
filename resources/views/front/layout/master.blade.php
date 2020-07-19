<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student COLOCO</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('front/css/libs/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/libs/material-components-web.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/skins/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
</head>
<body class="mdc-theme--background">
@include('front.layout.includes.header')
@yield('content')
@include('front.layout.includes.footer')
<div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
<script src="{{ asset('front/js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/libs/material-components-web.min.js') }}"></script>
<script src="{{ asset('front/js/libs/swiper.min.js') }}"></script>
<script src="{{ asset('front/js/scripts.js') }}"></script>
@yield('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1rF9bttCxRmsNdZYjW7FzIoyrul5jb-s&amp;callback=initMap" async defer></script>
</body>
</html>
