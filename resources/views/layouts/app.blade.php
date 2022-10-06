<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('images/front-logo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>HAKDER &#8211; federatie</title>
    <!-- BEGIN: CSS Assets-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">
 
    @yield('content')


<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>

<!-- END: JS Assets-->
@yield('jsContent')
</body>