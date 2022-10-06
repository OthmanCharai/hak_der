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
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <!-- BEGIN: CSS Assets-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">
        <!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Hakder" class="w-6" src="{{ asset('images/front-logo.png') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
</div>
<!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6"  src="{{ asset('images/front-logo.png') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Hak<span class="font-medium">Der</span> </span>
    </a>
    <div class="my-6"></div>
    <ul class="nav-sidebar">
        @role('admin')
        <li >
            <a href="{{ route('home') }}"  class="side-menu side-menu--{{ request()->is('dashboard') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        
        <li>
            <a href="{{ route('plan.index') }}" class="side-menu {{ request()->is('plan') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="navigation"></i> </div>
                <div class="side-menu__title">Plans  </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.unimproved') }}" class="side-menu side-menu--{{ request()->is('users/unimproved') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="user-x"></i> </div>
                <div class="side-menu__title"> Un Approved Members  </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}" class="side-menu side-menu--{{ request()->is('user') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                <div class="side-menu__title">Members  </div>
            </a>
        </li>
     
        <li>
            <a href="{{ route('invoice.index') }}" class="side-menu side-menu--{{ request()->is('invoice') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="side-menu__title"> Invoices  </div>
            </a>
        </li>

        <li>
            <a href="{{ route('child.index') }}" class="side-menu side-menu--{{ request()->is('child') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="side-menu__title"> Children  </div>
            </a>
        </li>
     
        <li>
            <a href="{{ route('importe') }}" class="side-menu side-menu--{{ request()->is('importes') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="anchor"></i> </div>
                <div class="side-menu__title">Import  </div>
            </a>
        </li>
        @endrole
        @role('member')
        <li>
            <a href="{{ route('member.dashboard') }}" class="side-menu side-menu--{{ request()->is('member/dashboard') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="anchor"></i> </div>
                <div class="side-menu__title">Dahboard  </div>
            </a>
        </li>
        <li>
            <a href="{{ route('invoice.index') }}" class="side-menu side-menu--{{ request()->is('invoice') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="side-menu__title"> Invoices  </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}" class="side-menu side-menu--{{ request()->is('profile') ? 'active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title">Profile  </div>
            </a>
        </li>

        @endrole
        <li>
            <a href="{{ route('logout') }}" class="side-menu" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">Logout  </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf    
            </form>

        </li>
    </ul>
</nav>
<!-- END: Side Menu -->

    @yield('content')


<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<!-- END: JS Assets-->
@yield('jsContent')
</body>