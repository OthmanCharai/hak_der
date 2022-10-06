@extends('layouts.layout')
@section('content')
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
        <li >
            <a href="http://hak-der.nx.gg/home" class="side-menu side-menu--active">
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
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Plans
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <a href="http://hak-der.nx.gg/plans/create">
                    <button class="button text-white bg-theme-1 shadow-md mr-2">Add Plan</button>
                    </a>
                    <div class="dropdown relative ml-auto sm:ml-0">
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto mt-5">
                                
                
                <table class="table">
                    <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="whitespace-no-wrap">#</th>
                        <th class="whitespace-no-wrap">Plan Title</th>
                        <th class="whitespace-no-wrap">Min Age</th>
                        <th class="whitespace-no-wrap">Max Age</th>
                        <th class="whitespace-no-wrap">Price</th>
                        <th class="whitespace-no-wrap">Cycle</th>
                        <th class="whitespace-no-wrap">Expire</th>
                        <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                                                                <tr>
                            <td class="border-b">1</td>
                            <td class="border-b">Uyelik Murcaati 65-71 Yas</td>
                            <td class="border-b">65</td>
                            <td class="border-b">71</td>
                            <td class="border-b">175.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/1/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/1/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">2</td>
                            <td class="border-b">Uyelik Murcaati 60-65 Yas</td>
                            <td class="border-b">60</td>
                            <td class="border-b">65</td>
                            <td class="border-b">85.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/2/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/2/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">3</td>
                            <td class="border-b">Uyelik Murcaati 55-59 Yas - Aile</td>
                            <td class="border-b">55</td>
                            <td class="border-b">59</td>
                            <td class="border-b">60.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/3/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/3/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">4</td>
                            <td class="border-b">Uyelik Murcaati 54 Yas Vealti - Aile</td>
                            <td class="border-b">54</td>
                            <td class="border-b">59</td>
                            <td class="border-b">60.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/4/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/4/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">5</td>
                            <td class="border-b">Uyelik Murcaati 26-59 Yas</td>
                            <td class="border-b">26</td>
                            <td class="border-b">54</td>
                            <td class="border-b">45.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/5/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/5/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">6</td>
                            <td class="border-b">Uyelik Murcaati 18-25 Yas</td>
                            <td class="border-b">18</td>
                            <td class="border-b">25</td>
                            <td class="border-b">35.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/6/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/6/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                            <tr>
                            <td class="border-b">7</td>
                            <td class="border-b">Uyelik Murcaati  0-18 Ya</td>
                            <td class="border-b">0</td>
                            <td class="border-b">18</td>
                            <td class="border-b">35.00</td>
                            <td class="border-b">Jaarlijks </td>
                            <td class="border-b">Verlopen Nooit</td>
                            <td class="border-b">
                                <a href="http://hak-der.nx.gg/plans/8/edit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

                                <form method="POST" action="http://hak-der.nx.gg/plans/8/delete" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">
                                <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                                </button>
                                </form>

                            </td>
                        </tr>
                                        </tbody>
                </table>
            </div>
        </div>
        <!-- END: Content -->
    </div>
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

    $(".changeLang").change(function(){
        window.location.href = url + "/"+ $(this).val();
    });

</script>
@endsection
