@extends('layouts.page')
@section('page-title')
    Show Investor
@endsection
@section('content')
    <div class="card-header">
        <h3 class="card-title">
            {{$investor->name}}
            <span class="badge {{$investor->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$investor->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>

        <large>Phone:  {{$investor->phone}}</large><br>
        <large>Email:  {{$investor->email}}</large><br>
        <large>Address:  {{$investor->address}}</large><br>
        <large>NID:  {{$investor->nid}}</large><br>

    </div>
@endsection
