@extends('layouts.page')
@section('page-title')
Show
@endsection
@section('content')
    <div class="card-header">
        <h3 class="card-title">
            {{$suppliers->name}}
            <span class="badge {{$suppliers->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$suppliers->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>

        <large>Phone:  {{$suppliers->phone}}</large><br>
        <large>Email:  {{$suppliers->email}}</large><br>
        <large>Address:  {{$suppliers->address}}</large><br>
        <large>NID:  {{$suppliers->nid}}</large><br>
        <large>Material:  {{$suppliers->material}}</large><br>

    </div>
@endsection
