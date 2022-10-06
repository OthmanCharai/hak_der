@extends('layouts.layout')
@section('content')
  
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
                        <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                        <i data-feather="search" class="search__icon"></i>
                    </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    </div>
                                    <div class="ml-3">Angelina Jolie</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">angelinajolie@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                    </div>
                                    <div class="ml-3">Johnny Depp</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="ml-3">Russell Crowe</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    </div>
                                    <div class="ml-3">Al Pacino</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                </div>
                                <div class="ml-3">Nike Tanjun</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                                </div>
                                <div class="ml-3">Sony Master Series A9G</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown relative mr-auto sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                    <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                        <div class="notification-content__box dropdown-box__content box">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <select class="dropdown-toggle button inline-block bg-theme-2 changeLang">
                        <option value="en" >English</option>
                        <option value="tr" >Turkish</option>
                        <option value="nl" >Dutch</option>
                    </select>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
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
                            <a href="http://hak-der.nx.gg/profile" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href="http://hak-der.nx.gg/member/import" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="http://hak-der.nx.gg/logout" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>  Logout </a>
                            <form id="logout-form" action="http://hak-der.nx.gg/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="z3fjUb3uxletkfKaVsSpQinjESIzUceX7QqsdqIx">                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Profile Layout
                </h2>
            </div>
            <!-- BEGIN: Profile Info -->
            <div class="intro-y box px-5 pt-5 mt-5">
                <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
                    <div class="p-5" id="horizontal-form">
                        <div class="preview">

                        <form action="{{ route('importe.all') }}" method="POST" enctype="multipart/form-data">
                        @csrf                
                         <div> <label>Input Text</label>
                            <input type="file"  name="file" class="input w-full border mt-2" placeholder="Select Excel File">
                        </div>
                        <br>
                        <button type="submit" class="button bg-theme-1 text-white mt-5">Import User Data</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
            <!-- END: Profile Info -->

        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->

  

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
<script type="text/javascript">

    var url = "http://hak-der.nx.gg/lang";

    $(".changeLang").change(function(){
        window.location.href = url + "/"+ $(this).val();
    });

</script>
@endsection