@extends('layouts.page')
@section('page-title')
    @include('components.page-title',['title' => auth()->user()->name])
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row bg-soft-dark mb-0" style="border-radius: 5px;">
        <div class="col-md-4 text-center p-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted fw-medium mb-0">{{config('app.name')}}</p>
                            <a href="{{route('account.index')}}">
                                <h4 class="mb-0 text-primary">ACCOUNTS</h4>
                            </a>
                        </div>
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="bx bx-copy-alt font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center p-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted fw-medium mb-0">BALANCE</p>
                            <h3 class="mb-0 text-primary"><small>৳</small> {{$balance != null ? number_format($balance) : 0}}</h3>
                        </div>
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <span class="font-size-24 font-weight-bold">৳</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center p-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted fw-medium mb-0">CREATE</p>
                            <a href="{{route('customer.create')}}">
                                <h4 class="mb-0 text-primary">CUSTOMER</h4>
                            </a>
                        </div>
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="fas fa-id-card font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <a class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1 font-size-24 p-3" href="{{route('invoice.create')}}">Create Invoice</a>
    </div>
@endsection
