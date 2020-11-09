<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />--}}
{{--    <meta content="Themesbrand" name="author" />--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('css')

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">
    @include('partials.top-navbar')
    <!-- ========== Left Sidebar Start ========== -->
    @include('partials.left-sidebar')
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                @include('components.page-title')
                <!-- end page title -->
                <div class="checkout-tabs">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © maroon.lab.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Maroon Lab.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        @include('partials.settings')

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('js/skote.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
