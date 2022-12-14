@extends('layouts.layout')
@section('content')
   
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
                            <a href={{ route('profile') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('importe') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>  Logout </a>
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
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Profile Menu -->
                <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                    <div class="intro-y box mt-5">
                        <div class="relative flex items-center p-5">
                            <div class="w-12 h-12 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="http://hak-der.nx.gg/dist/images/profile-8.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium text-base">{{ $user->username }}</div>
                                <div class="text-gray-600">( $user->age )</div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-gray-200">
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Name :- {{ $user->name }}  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Username :- {{ $user->name }}  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Date Of Birth :- {{ $user->birth_day }}  </a>
                        </div>
                        <div class="p-5 border-t border-gray-200">
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Phone :- {{ $user->phone_number }}  </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Mobile :-   {{ $user->mobile }}</a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Email :- {{ $user->email }}</a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Address :- {{ $user->address }} </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Postcode :- {{ $user->zip_code }}  </a>
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
                                    @empty($user->children)
                                        
                                   @else
                                    <div>
                                        <label>Name </label>
                                        <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" value=""  disabled>
                                    </div>
                                    @foreach ($user->children as $child)
                                    <div class="mt-3">
                                        <label>Child One</label>
                                        <input type="text" class="input w-full border mt-2" value="{{ $child->name }}" disabled>
                                    </div>
                                        
                                    @endforeach
                                    @endempty
                                    
                                </div>
                               
                                <div class="col-span-12 xl:col-span-6">
                                    @empty($user->partner)
                                    @else
                                    <div>
                                        <label>Partner Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2"  value="{{ $user->partner->birth_day }}" disabled>
                                    </div>
                                    @endempty
                                    @empty($user->children)
                                    @else
                                    @foreach ($user->children as $child)
                                    <div class="mt-3">
                                        <label>Child One Date of Birth</label>
                                        <input type="text" class="input w-full border mt-2"  value="{{ $child->birth_day }}" disabled>
                                    </div>
                                        
                                    @endforeach
                                   
                                </div>
                                @endempty
                            </div>
                            <div class="flex justify-end mt-4">
                                <a href="http://hak-der.nx.gg/memberProfileEdit">
                                    <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                                </a>

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