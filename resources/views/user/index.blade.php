@extends('layouts.layout')
@section('content')
    <!-- BEGIN: Mobile Menu -->

    <!-- END: Mobile Menu -->


    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <form method="POST" action="http://hak-der.nx.gg/searchResult" accept-charset="UTF-8"
                        enctype="multipart/form-data"><input name="_token" type="hidden"
                            value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                        <input type="text" name="search" required class="search__input input placeholder-theme-13"
                            placeholder="Search...">
                        <button type="submit">
                            <i data-feather="search" class="search__icon"></i>
                        </button>
                    </form>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i>
                </a>
            </div>
            <!-- END: Search -->

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

            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="http://hak-der.nx.gg/dist/images/profile-12.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Binali</div>
                            <div class="text-xs text-theme-41">admin</div>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('profile') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('importe') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            <form id="logout-form" action="http://hak-der.nx.gg/logout" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_token" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->

        <div class="overflow-x-auto mt-5">
            @if(Session::has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">{{ Session::get('message') }}</p>
                  </div>
                </div>
              </div>
       
            @endif
            <table class="table">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        
                        <th class="whitespace-no-wrap">Name</th>
                        <th class="whitespace-no-wrap">Username</th>
                        <th class="whitespace-no-wrap">Email</th>
                        <th class="whitespace-no-wrap">Phone</th>
                        <th class="whitespace-no-wrap">A</th>
                        <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                    </tr>
                </thead>
                <tbody>
         
                        @foreach ($users as $user)
                            <tr>
                                
                                <td class="border-b">{{ $user->name }}</td>
                                <td class="border-b">{{ $user->username }}</td>
                                <td class="border-b">{{ $user->email }}</td>
                                <td class="border-b">{{ $user->phone_number }}</td>
                                <td class="border-b">
                                    <a href="{{ route('user.approve',$user) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-4 h-4 mr-2" style="display: inline; color: #28a745"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>                                    </a>
                                </td>
                                <td class="border-b">
                                    <a href="{{ route('user.show',$user) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-4 h-4 mr-2" style="display: inline; color: #28a745"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                </tbody>

            </table>
            <div class="row mt-5">
              


        </div>
    </div>
    <!-- END: Content -->

    <!-- BEGIN: JS Assets-->
@endsection
@section('jsContent')
    <!-- END: JS Assets-->
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
    <script type="text/javascript">
        var url = "http://hak-der.nx.gg/lang";

        $(".changeLang").change(function() {
            window.location.href = url + "/" + $(this).val();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#selectall").click(function() {
                if (this.checked) {
                    $('.checkboxall').each(function() {
                        $(".checkboxall").prop('checked', true);
                    })
                } else {
                    $('.checkboxall').each(function() {
                        $(".checkboxall").prop('checked', false);
                    })
                }
            });
        });
    </script>
@endsection
