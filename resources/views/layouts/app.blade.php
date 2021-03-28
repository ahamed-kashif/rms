<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth
    <title>{{ isset($title) ? $title : config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />--}}
{{--    <meta content="Themesbrand" name="author" />--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/rms.svg')}}">
    @yield('css')
    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
@stack('css')

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

@yield('body')

<!-- JAVASCRIPT -->
<script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('libs/node-waves/waves.min.js')}}"></script>
@yield('js')
<script src="{{asset('js/skote.js')}}"></script>
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $(".alert").delay(500).slideUp(300);--}}
{{--    });--}}
{{--</script>--}}
{{--<script src="{{asset('js/app.js')}}"></script>--}}
@stack('js')
</body>
</html>
