@extends('layouts.app')
@section('css')
    @yield('auth-css')
@endsection
@section('body')
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-4">
                            @yield('content')
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            {{--                        <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>--}}
                            <p>© 2022 SHREL. Crafted with <i class="mdi mdi-heart text-danger"></i> by maroon.lab</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @yield('auth-js')
@endsection
