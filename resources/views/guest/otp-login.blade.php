
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('images/front-logo.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - Hak Der</title>
    <!-- BEGIN: CSS Assets-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('images/front-logo.png') }}">
                <span class="text-white text-lg ml-3"> Hak<span class="font-medium">Der</span> </span>
            </a>
            <div class="my-auto">
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            <input type="hidden" name="_token" value="Urbs4ncKMhqRAG1tRPkHhLg29ilH38ZMy55W8jUD">                    <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Login
                </h2>
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account.</div>
                <div class="intro-x mt-8">
                    <input type="text" id="email" class="intro-x login__input input input--lg border border-gray-300 block" name="email" value="" required autocomplete="email" autofocus>
                    
                    <input  id="password" type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                    <a href="{{ route('otp.login') }}">
                    <button type="button" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">OTP Login</button>
                    </a>
                </div>
                <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                    <a href="http://hak-der.nx.gg"> By signin up, you agree to our. </a>
                    <br>
                </div>
            </div>
        </div>
        <!-- END: Login Form -->
            </form>
    </div>
</div>

</body>
</html>