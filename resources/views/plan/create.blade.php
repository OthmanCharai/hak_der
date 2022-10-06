@extends('layouts.layout')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <x-tool-bar />
        <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Add Plan
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            </div>
        </div>
        <!-- BEGIN: Invoice -->
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Add Plan
                        </h2>
                    </div>

                    <div class="p-5" id="input">


                        <div class="preview">

                            <form method="POST" action="{{ route('plan.store') }}" accept-charset="UTF-8"
                                class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="name">Plan Title</label>
                                    <input name="title" value="" placeholder="Plan Title" required=""
                                        class="input w-full border mt-2">
                                </div>
                                <div class="mt-3">
                                    <label for="email">Min Age</label>
                                    <input name="min_age" value="" type="number" min='0' placeholder="Min Age" required=""
                                        class="input w-full border mt-2">
                                </div>
                                <div class="mt-3">
                                    <label for="email">Max Age</label>
                                    <input name="max_age" value="" min='0' type="number" placeholder="Max Age" required=""
                                        class="input w-full border mt-2">
                                </div>
                                <div class="mt-3">
                                    <label for="email">Price </label>
                                    <input name="price" value="" type="number" placeholder="Price " required=""
                                        class="input w-full border mt-2">
                                </div>
                             

                                <div class="mt-5 pb-5">
                                    <button type="submit" class="button bg-theme-1 text-white">Add Plan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input -->

        </div>
        <!-- END: Invoice -->

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
