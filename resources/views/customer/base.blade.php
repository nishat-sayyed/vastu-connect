<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Vastu Connect</title>
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/features-basic.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@yield('pagecss')
<!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
@yield('css')
<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body>
<div class="theme-container basic basic-dark-theme">
    <!-- BEGIN: Header-->
@include('customer/header')
<!-- END: Header-->


    <!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->


    <!-- BEGIN: Footer-->
@include('customer/footer')
<!-- END: Footer-->

</div>
<script src="{{asset('js/jquery-1-11-1.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/counterUp.js')}}"></script>
<script src="{{asset('js/progressbar.min.js')}}"></script>
<script src="{{asset('js/noframework.waypoints.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/common.js')}}" defer></script>


<!-- BEGIN: Page JS-->
@yield('pagescript')
@yield('script')
<!-- END: Page JS-->


</body>

</html>