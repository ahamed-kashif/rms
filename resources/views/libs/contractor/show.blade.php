@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <h3 class="card-title">
            {{$contractor->name}}
            <span class="badge {{$contractor->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$contractor->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <ol class="list-unstyled">
                <li>
                    <b>Contact Number</b><p><a href="tel:{{$contractor->phone_number}}">{{$contractor->phone_number}}</a></p>
                </li>
                <li>
                    <b>Email Address</b><p><a href="email:{{$contractor->email}}">{{$contractor->email}}</a></p>
                </li>
                <li>
                    <b>National ID (NID)</b><p>{{$contractor->nid}}</p>
                </li>
                <li>
                    <b>Address</b><p>{{$contractor->address}}</p>
                </li>
            </ol>
        </div>
        <div class="col-md-7 col-lg-7 border-pink">
            <div class="align-content-end">
                <h5>Assigned Projects</h5>
                <table class="table table-bordered align-content-center">
                    <thead>
                    <tr>
                        <th class="title">Active<small>(n)</small></th>
                        <th>Project</th>
                        <th>Contracted for</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="badge badge-pill badge-success text-light font-size-15 p-2">active</span> </td>
                        <td>Demo</td>
                        <td>Demo</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>nill</td>
                        <td>nill</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>nill</td>
                        <td>nill</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

