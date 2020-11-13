@extends('layouts.page')
@section('page-title')
    Show Contractor
@endsection
@section('content')
    <div class="card-header">
        <h3 class="card-title">
            {{$contractor->name}}
            <span class="badge {{$contractor->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$contractor->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>

        <large>Phone:  {{$contractor->phone}}</large><br>
        <large>Email:  {{$contractor->email}}</large><br>
        <large>Address:  {{$contractor->address}}</large><br>
        <large>NID:  {{$contractor->nid}}</large><br>
        <large>Material:{{$contractor->material}}</large><br>

    </div>
@endsection
