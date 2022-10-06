@extends('layouts.layout')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
      <x-tool-bar></x-tool-bar>
        <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Plans
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="{{ route('plan.create') }}">
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
                       
                        <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        
                  
                    <tr>
                        <td class="border-b">{{ $plan->id }}</td>
                        <td class="border-b">{{ $plan->title }}</td>
                        <td class="border-b">{{ $plan->min_age }}</td>
                        <td class="border-b">{{ $plan->max_age }}</td>
                
                        <td class="border-b">{{ $plan->price }}</td>
                        <td class="border-b">
                            <a href="{{ route('plan.edit',$plan) }}">
                                <i data-feather="edit" class="w-4 h-4 mr-2" style="display: inline; color: #0d143a"></i>
                            </a>

                            <form method="POST" action="{{ route('plan.destroy',$plan) }}" accept-charset="UTF-8"
                                style="display:inline"><input name="_method" type="hidden" value="DELETE"><input
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
@endsection
