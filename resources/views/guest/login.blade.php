
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
         @csrf                <!-- END: Login Info -->
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
                    <a href="{{ route('register') }}">Sign up</a>

                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                    <a href="">
                    <button type="button" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">OTP Login</button>
                    </a>
                </div>
                <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                    <a href=""> By signin up, you agree to our. </a>
                    <br>
                </div>
                @error('email')
                <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ $message }}</strong>

                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                  </div>
                @enderror
            </div>
        </div>
        <!-- END: Login Form -->
            </form>
    </div>
</div>

</body>
</html>