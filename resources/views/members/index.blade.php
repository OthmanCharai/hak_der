@extends('layouts.layout')
@section('content')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
            </div>
            <!-- END: Breadcrumb -->
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
                            <div class="font-medium">Bahar</div>
                            <div class="text-xs text-theme-41">user</div>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('profile') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Profile
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-5 mt-5">
            <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="http://hak-der.nx.gg/dist/images/profile-14.jpg">
                        <div
                            class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2">
                            <i class="w-4 h-4 text-white" data-feather="camera"></i>
                        </div>
                    </div>
                    <div class="ml-5">
                        <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $user->username }}
                        </div>
                        <div class="text-gray-600">User ( {{ $user->id }} )</div>
                    </div>
                </div>
                <div
                    class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail"
                            class="w-4 h-4 mr-2"></i> {{ $user->email }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="phone"
                            class="w-4 h-4 mr-2"></i> {{ $user->phone_number }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter"
                            class="w-4 h-4 mr-2"></i>{{ $user->mobile_number }} </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-5">Other Details</div>
                    <div class="flex items-center justify-center lg:justify-start mt-2">
                        <div class="mr-2 flex"> User Name : <span
                                class="ml-3 font-medium text-theme-9">{{ $user->name }}</span> </div>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="mr-2 flex"> Nationality : <span
                                class="ml-3 font-medium text-theme-6">{{ $user->nationality }}</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            <div class="tab-content__pane active" id="dashboard">
                <div class="grid grid-cols-12 gap-6">

                </div>
            </div>
        </div>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Invoices
            </h2>
        </div>
        <div class="overflow-x-auto mt-5">
            <table class="table">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="whitespace-no-wrap">#</th>

                        <th class="whitespace-no-wrap">Name</th>
                        <th class="whitespace-no-wrap">Email</th>
                        <th class="whitespace-no-wrap">Status</th>
                        <th class="whitespace-no-wrap">Phone</th>
                        <th class="whitespace-no-wrap">Amount</th>
                        <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td class="border-b">{{ $invoice->id }}</td>
                            <td class="border-b">{{ $user->name }}</td>

                            <td class="border-b">{{ $user->email }}</td>
                            <td class="border-b">
                                @if ($invoice->paid_at)
                                    <span
                                        class=" rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3 ">Paid</span>
                                @else
                                    <span
                                        class="rounded-full bg-orange-500 uppercase px-2 py-1 text-xs font-bold mr-3 ">Panddig</span>
                                @endif
                            </td>

                            <td class="border-b">{{ $user->phone_number }}</td>
                            <td class="border-b">{{ $invoice->price }}</td>

                            <td class="border-b">
                                <a href="{{ route('invoice.show',$invoice->id) }}">
                                    <i data-feather="eye" class="w-4 h-4 mr-2"
                                        style="display: inline; color: #28a745"></i>
                                </a>
                                <form method="POST" action="{{ route('invoice.destroy',$invoice->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                        <i data-feather="trash-2" class="w-4 h-4 mr-2"
                                            style="display: inline; color: #a71e06"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Content -->
    </div>
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
@endsection
