@extends('layouts.app')
@section('content')
    <div class="border-theme-24 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="HakDer" class="w-10" src="{{ asset('images/front-logo.png') }}">
                <span class="text-white text-lg ml-3"> Hak<span class="font-medium">Der</span> </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb breadcrumb--light mr-auto"> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <select class="dropdown-toggle button inline-block bg-theme-2 changeLang">
                        <option value="en">English</option>
                        <option value="tr">Turkish</option>
                        <option value="nl">Dutch</option>
                    </select>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-feather="search"
                        class="notification__icon"></i> </a>
            </div>
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <a href="{{ route('login') }}" class="breadcrumb--active"><span class="text-white text-lg ml-3">
                            Login </span></a>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-feather="search"
                        class="notification__icon"></i> </a>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('login') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Login </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            <li>
                <a href="javascript:;.html" class="top-menu top-menu--active">
                    <div class="top-menu__icon"> <i data-feather="sidebar"></i> </div>
                    <div class="top-menu__title"> Forms </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Hakder" class="w-6" src="{{ asset('images/front-logo.png') }}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Content -->
        <div class="content">
            <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Registration Form
                    </h2>
                </div>
                
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    1.Personal Detail

                                </h2>
                            </div>

                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <label>Name</label>
                                        <input type="text" name="name" class="input w-full border mt-2"
                                            placeholder="Name">
                                            @error('name')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Surname</label>
                                        <input type="text" name="username" class="input w-full border mt-2"
                                            placeholder="Surname">
                                            @error('username')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3">
                                <label>Birth Place </label>
                                <input type="text" name="birth_place" class="input w-full border mt-2" placeholder="Birth Place ">
                                @error('birth_place')
                                <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">{{ $message }}</strong>
    
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                  </div>
                                @enderror
                            </div> 
                                    <div class="mt-3">
                                        <label>Date of birth</label>
                                        <input type="text" name="birth_day" class="datepicker input w-full border mt-2"
                                            placeholder="Date of birth">
                                            @error('birth_day')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3"> <label>Cinsiyeti | Geslacht</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="flex items-center text-gray-700 mr-2"> <input type="radio"
                                                    class="input border mr-2" id="horizontal-radio-chris-evans"
                                                    name="gender" value="Male"> <label class="cursor-pointer select-none"
                                                    for="horizontal-radio-chris-evans">Male </label> </div>
                                            <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input
                                                    type="radio" class="input border mr-2"
                                                    id="horizontal-radio-liam-neeson" name="gender" value="Female">
                                                <label class="cursor-pointer select-none"
                                                    for="horizontal-radio-liam-neeson">Female</label> </div>
                                                </div>
                                                @error('gender')
                                                <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                    <strong class="font-bold">{{ $message }}</strong>
                    
                                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                    </span>
                                                  </div>
                                                @enderror
                                    </div>
                                    <div class="mt-3"> <label>Nationality | Tabiyeti | Nationaliteit</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="flex items-center text-gray-700 mr-2"> <input type="radio"
                                                    class="input border mr-2" id="horizontal-radio-turk"
                                                    name="nationality" value="Türk | Turks"> <label
                                                    class="cursor-pointer select-none" for="horizontal-radio-turk">Türk |
                                                    Turks</label> </div>
                                            <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input
                                                    type="radio" class="input border mr-2"
                                                    id="horizontal-radio-netherlans" name="nationality"
                                                    value="Hollanda | Nederlands"> <label class="cursor-pointer select-none"
                                                    for="horizontal-radio-netherlans">Hollanda | Nederlands</label> </div>
                                                </div>
                                                @error('nationality')
                                                <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                    <strong class="font-bold">{{ $message }}</strong>
                    
                                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                    </span>
                                                  </div>
                                                @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label> Disease </label>
                                        <input type="text" name="sickness" class="input w-full border mt-2"
                                            placeholder="Disease ">
                                            @error('sickness')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Funeral place</label>
                                        <input type="text" name="furnale_place" class="input w-full border mt-2"
                                            placeholder="Funeral place">
                                        @error('furnale_place')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input"
                                        class="copy-code button button--sm border flex items-center text-gray-700"> <i
                                            data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->

                    </div>
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    2. Partner Detail

                                </h2>
                            </div>

                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <label>Name </label>
                                        <input type="text" name="partner_name" class="input w-full border mt-2"
                                            placeholder="Name ">
                                            @error('partner_name')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Surname</label>
                                        <input type="text" name="partner_username" class="input w-full border mt-2"
                                            placeholder="Surname">
                                            @error('partner_username')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                       <div class="mt-3">
                                <label>Birth Place </label>
                                <input type="text" name="partner_birth_place" class="input w-full border mt-2" placeholder="Birth Place ">
                                @error('partner_birth_place')
                                <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">{{ $message }}</strong>
    
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                  </div>
                                @enderror
                            </div> 

                                    <div class="mt-3">
                                        <label>Partner Date of Birth</label>
                                        <input type="text" name="partner_birth_day"
                                            class="datepicker input w-full border mt-2"
                                            placeholder="Partner Date of Birth">
                                            @error('partner_birth_day')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                              </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3"> <label>Gender</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="flex items-center text-gray-700 mr-2"> 
                                                <input type="radio"
                                                    class="input border mr-2" id="horizontal-radio-partnerGenderMale"
                                                    name="partner_gender" value="Male"> <label
                                                    class="cursor-pointer select-none"
                                                    for="horizontal-radio-partnerGenderMale">Male </label> </div>
                                            <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> 
                                                <input
                                                    type="radio" class="input border mr-2"
                                                    id="horizontal-radio-partnerGenderFemale" name="partner_gender"
                                                    value="Female"> <label class="cursor-pointer select-none"
                                                    for="horizontal-radio-partnerGenderFemale">Female</label> </div>
                                                </div>
                                                @error('partner_gender')
                                                    <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                        <strong class="font-bold">{{ $message }}</strong>
                        
                                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                        </span>
                                                    </div>
                                                @enderror
                                    </div>
                                    <div class="mt-3"> <label>Nationality</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="flex items-center text-gray-700 mr-2"> <input type="radio"
                                                    class="input border mr-2" id="horizontal-radio-partnerNationalityTurk"
                                                    name="partner_nationality" value="Türk | Turks"> <label
                                                    class="cursor-pointer select-none"
                                                    for="horizontal-radio-partnerNationalityTurk">Türk | Turks</label>
                                            </div>
                                            <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input
                                                    type="radio" class="input border mr-2"
                                                    id="horizontal-radio-partnerNationalityNetherlands"
                                                    name="partner_nationality" value="Hollanda | Nederlands"> <label
                                                    class="cursor-pointer select-none"
                                                    for="horizontal-radio-partnerNationalityNetherlands">Hollanda |
                                                    Nederlands</label> </div>
                                                </div>
                                                @error('partner_nationality')
                                                    <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                        <strong class="font-bold">{{ $message }}</strong>
                                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                        </span>
                                                    </div>
                                                @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Disease </label>
                                        <input type="text" name="partner_sickness" class="input w-full border mt-2"
                                            placeholder="Disease ">
                                        @error('partner_sickness')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Partner Funeral place</label>
                                        <input type="text" name="partner_furnal_place" class="input w-full border mt-2"
                                            placeholder="Funeral place">
                                        @error('furnale_place')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- END: Input Sizing -->

                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 box mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y mt-3">
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <label>Address</label>
                                        <input type="text" name="address" class="input w-full border mt-2"
                                            placeholder="Address">
                                        @error('address')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Postcode</label>
                                        <input type="text" name="zip_code" class="input w-full border mt-2"
                                            placeholder="Postcode">
                                        @error('zip_code')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Residence</label>
                                        <input type="text" name="residence" class="input w-full border mt-2"
                                            placeholder="Residence">
                                        @error('residence')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Password </label>
                                        <input id="password" type="password" name="password"
                                            class="input w-full border mt-2" placeholder="Password ">
                                        @error('password')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                   
                                 
                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y mt-3">
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_number" class="input w-full border mt-2"
                                            placeholder="Phone Number">
                                        @error('phone_number')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>Mobile No.</label>
                                        <input type="text" name="mobile_number" class="input w-full border mt-2"
                                            placeholder="Mobile No.">
                                        @error('mobile_number')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label>Email </label>
                                        <input type="email" name="email" class="input w-full border mt-2"
                                            placeholder="E-mail">
                                        @error('email')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                
                                    <div class="mt-3">
                                        <label>Confirm Password</label>
                                        <input id="password-confirm" type="password" name="password_confirmation"
                                            class="input w-full border mt-2" placeholder="Confirm Password">
                                        @error('password_confirmation')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 box mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                18 yaşından gün almamış çocukları / Kinderen tot 18 jaar

                            </h2>
                            <button id='add_button' type="button" class=" button inline-block bg-theme-2 changeLang">add
                                a child</button>
                        </div>
                    </div>


                    <div class="intro-y col-span-12 lg:col-span-3">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y">
                            <div class="p-5" id="input">
                                <div class="preview" id='child_name'>
                                    <div>
                                        <label>Child Name</label>
                                        <input type="text" name="children[]" class="input w-full border mt-2"
                                            placeholder="Child ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-3">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y">
                            <div class="p-5" id="input">
                                <div class="preview" id='brith_day'>
                                    <div>
                                        <label>Child  Date of Birth </label>
                                        <input type="text" name="children_birth_day[]"
                                            class="datepicker input w-full border mt-2"
                                            placeholder="Child One Date of Birth">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-3">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y">
                            <div class="p-5" id="input">
                                <div class="preview" id='birth_place'>
                                    <div>
                                        <label>Child  Birth Place </label>
                                        <input type="text" name="children_birth_place[]" class="input w-full border mt-2"
                                            placeholder="Child One Birth Place">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                    <div class="intro-y col-span-12 lg:col-span-3">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y">
                            <div class="p-5" id="input">
                                <div class="preview" id='sex'>
                                    <div>
                                        <label>Sex </label>
                                        <div class="flex flex-col sm:flex-row mt-4">
                                            <div class="flex items-center text-gray-700 mr-2"> <input type="radio"
                                                    class="input border mr-2" id="horizontal-radio-genderChildOneMale"
                                                    name="gender_child[]" value="Male"> <label
                                                    class="cursor-pointer select-none"
                                                    for="horizontal-radio-genderChildOneMale">Male </label> </div>
                                            <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input
                                                    type="radio" class="input border mr-2"
                                                    id="horizontal-radio-genderChildOneFemale" name="gender_Child"
                                                    value="Female"> <label class="cursor-pointer select-none"
                                                    for="horizontal-radio-genderChildOneFemale">Female</label> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                </div>
                <div class="grid grid-cols-12 box gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y">
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <div class="flex flex-col sm:flex-row mt-4">
                                            <div class="flex items-center text-gray-700 mr-2">
                                                <div class="flex items-center text-gray-700 mt-2">
                                                    <input required type="checkbox" class="input border mr-2" name="condition"
                                                        id="vertical-checkbox-condition">
                                                    <label class="cursor-pointer select-none"
                                                        for="vertical-checkbox-condition">
                                                        I hereby authorize the Stichting Hakder uitvaartfonds to cancel in
                                                        writing from my said account to write off amounts due to the fees
                                                        owed for a contribution.
                                                        <a href="http://hak-der.nx.gg/Algemene-voorwaarden-Hak-Der.pdf"
                                                            style="color: #d32929">Terms and Conditions</a>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="flex flex-col sm:flex-row mt-4">
                                            <div class="flex items-center text-gray-700 mr-2">
                                                <input required type="checkbox" class="input border mr-2"
                                                    id="vertical-checkbox-terms" name="terms">
                                                <label class="cursor-pointer select-none" for="vertical-checkbox-terms">
                                                    I agree with the administrative registration costs and contribution.
                                                    Upon acceptance, the contribution determinations will be made known to
                                                    me (by telephone) in advance
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END: Input Sizing -->
                        </div>


                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 box mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y mt-3">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    AUTHORITY
                                </h2>
                            </div>

                            <div class="p-5" id="input">
                                <div class="preview">
                                    I hereby authorize the Stichting Hakder uitvaartfonds to cancel in writing from my said
                                    account to write off amounts due to the fees owed for a contribution.
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="flex items-center text-gray-700 mt-2">
                                            <input required type="checkbox" class="input border mr-2" name="agree"
                                                id="vertical-checkbox-agree">
                                            <label class="cursor-pointer select-none" for="vertical-checkbox-agree">
                                                Agree
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label>Name and surname</label>
                                        <input type="text" name="owner" class="input w-full border mt-2"
                                            placeholder="Name and surname">
                                            @error('owner')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label>IBAN bank account number</label>
                                        <input type="text" name="account_number" class="input w-full border mt-2"
                                            placeholder="IBAN bank account number">
                                        @error('account_number')
                                            <div class="bg-red-100  text-red-700 mt-2 px-4 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">{{ $message }}</strong>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row mt-5">
                                        <button
                                            class="button inline-block rightButton w-48 mr-1 mb-2 border border-theme-12 text-theme-12">Submit</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                    </div>
                </div>

            </form>
        </div>
        <!-- END: Content -->

    </div>
@endsection
@section('jsContent')
    <script>
        /** add active class and stay opened when selected */
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function() {
            return this.href == url;
        }).addClass('side-menu--active');

        // for treeview
        $('ul.nav-treeview a').filter(function() {
            return this.href == url;
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    </script>
    <script>
        let id = 0;
        let children_name = document.getElementById('child_name');
        let children_birth_day = document.getElementById('brith_day');
        let children_birth_place = document.getElementById('birth_place');
        let add_button = document.getElementById('add_button');

        let child_sex = document.getElementById('sex');


        add_button.addEventListener('click', function(e) {

            children_name.insertAdjacentHTML('beforeend', '<div class="mt-8  ' + id + '">' +
                '<label>Child Name</label>' +
                '<input type="text" name="children[]" class="input w-full border mt-2" placeholder="Name">' +
                '</div>');
            children_birth_day.insertAdjacentHTML('beforeend', '<div class=" mt-8 ' + id + '">' +
                ' <label>Child  Date of Birth </label>' +
                '<input type="date" name="children_birth_day[]" class="datepicker input w-full border mt-2" placeholder="Date of Birth">' +
                '</div>');
            children_birth_place.insertAdjacentHTML('beforeend', '<div class="mt-8 ' + id + '">' +
                '<label>Child  Birth Place </label>' +
                '<input type="text" name="children_birth_place[]" class="input w-full border mt-2" placeholder="Child  Birth Place">' +
                '</div>');
            child_sex.insertAdjacentHTML('beforeend', '<div class="mt-8 ' + id + '">' +
                '<label>Sex </label>' +
                '<div class="flex flex-col sm:flex-row mt-4">' +
                '<div class="flex items-center text-gray-700 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-genderChildOneMale" name="gender_child" value="Male"> <label class="cursor-pointer select-none" for="horizontal-radio-genderChildOneMale">Male </label> </div>' +
                ' <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-genderChildOneFemale" name="gender_child" value="Female"> <label class="cursor-pointer select-none" for="horizontal-radio-genderChildOneFemale">Female</label> </div>' +
                '</div>' +
                '</div>')

            i++;

        })
    </script>

    <script type="text/javascript">
        $(".datepicker").val('');
        var url = "http://hak-der.nx.gg/lang";

        $(".changeLang").change(function() {
            window.location.href = url + "/" + $(this).val();
        });
    </script>
@endsection
