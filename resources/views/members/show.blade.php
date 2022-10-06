
@extends('layouts.layout')
@section('content')
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Hakder" class="w-6" src="http://hak-der.nx.gg/images/front-logo.png">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
</div>
<!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="http://hak-der.nx.gg/images/front-logo.png">
        <span class="hidden xl:block text-white text-lg ml-3"> Hak<span class="font-medium">Der</span> </span>
    </a>
    <div class="my-6"></div>
    <ul class="nav-sidebar">
        <li >
            <a href="http://hak-der.nx.gg/home" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/plans/index" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="navigation"></i> </div>
                <div class="side-menu__title">Plans  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/m/un-approved" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user-x"></i> </div>
                <div class="side-menu__title"> Un Approved Members  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/admin/members" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                <div class="side-menu__title">Members  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/todos" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                <div class="side-menu__title">ToDo  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/invoices" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="side-menu__title"> Invoices  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/profile" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title">Profile  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/member/import" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="anchor"></i> </div>
                <div class="side-menu__title">Import  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/logout" class="side-menu" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">Logout  </div>
            </a>
            <form id="logout-form" action="http://hak-der.nx.gg/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">            </form>

        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
                <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> </div>
                <!-- END: Breadcrumb -->
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
                                <input type="hidden" name="_token" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">                            </form>

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
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Profile Menu -->
                <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                    <div class="intro-y box mt-5">
                        <div class="relative flex items-center p-5">
                            <div class="w-12 h-12 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="http://hak-der.nx.gg/dist/images/profile-8.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium text-base">Af Ohab 2</div>
                                <div class="text-gray-600">( 852493 )</div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-gray-200">
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Name :- Af Ohab 2  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Membership No. :- 852493 </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Username :- HD580325  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Date Of Birth :- 2021-12-29  </a>
                        </div>
                        <div class="p-5 border-t border-gray-200">
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Phone :- 09007539392  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> GSM :-   </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Email :- afohab@aol.com</a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Address :- 231, MI Road, Panch Batti </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> User Name :- India  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Postcode :- 852493  </a>
                        </div>
                    </div>
                </div>
                <!-- END: Profile Menu -->
                <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                    <!-- BEGIN: Personal Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Details
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 xl:col-span-6">
                                    <div>
                                        <label>Name </label>
                                        <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" value="Test Partner"  disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child One</label>
                                        <input type="text" class="input w-full border mt-2" value="" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Two</label>
                                        <input type="text" class="input w-full border mt-2" value="" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Three</label>
                                        <input type="text" class="input w-full border mt-2" value="" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Four</label>
                                        <input type="text" class="input w-full border mt-2" value="" disabled>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-6">
                                    <div>
                                        <label>Partner Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2"  value="1981-05-20" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child One Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2"  value="2021-12-29" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Two Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2" value="2021-12-29" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Three Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2" value="2021-12-29" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label>Child Four Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2" value="2021-12-29" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <a href="http://hak-der.nx.gg/invoice/3" class="text-theme-6 flex items-center">
                                    <i data-feather="file-plus" class="w-4 h-4 mr-1"></i>
                                    Add Invoice
                                </a>
                                <button type="button" class="button w-20 bg-theme-1 text-white ml-auto">Save</button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Personal Information -->
                </div>
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

    $(".changeLang").change(function(){
        window.location.href = url + "/"+ $(this).val();
    });

</script>
@endsection