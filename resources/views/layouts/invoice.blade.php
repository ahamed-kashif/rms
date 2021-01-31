@extends('layouts.app')
@section('css')
    @yield('invoice-css')
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
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h3 class="text-primary">@yield('title')</h3>
                                        <p class="font-weight-bold">@yield('subtitle')</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="/">
                                    <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{asset('images/rms.svg')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                    </div>
                                </a>
                            </div>
                            <div class="justify-content-center">
                            @yield('content')

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            {{--                        <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>--}}
                            <p>@yield('footer')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @yield('invoice-js')
@endsection
