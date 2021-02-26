@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
@endsection
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <h3 class="card-title">
            {{$investor->name}}
            <span class="badge {{$investor->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$investor->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('investor.destroy',$investor->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('investor.edit',$investor->id)}}">
                            <i class="fa fa-edit"></i>
                            <span class="text-alias"> Edit</span></a>
                        <button class="btn btn-danger w-xs" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                            <i class="fas fa-trash-alt"></i>
                            <span class="text-alias"> Delete</span>
                        </button>
                    </form>

                </div>
            </div>
            {{--            <div class="btn btn-group-sm">--}}
            {{--                <a class="btn btn-outline-primary" href="{{route('contractor.edit',$contractor->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>--}}
            {{--                <form action="{{route('contractor.destroy',$contractor->id)}}" method="post">--}}
            {{--                    @csrf--}}
            {{--                    @method('delete')--}}
            {{--                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">--}}
            {{--                        <i class="fas fa-trash-alt"></i>--}}
            {{--                        <span class="text-alias"> Delete</span>--}}
            {{--                    </button>--}}
            {{--                </form>--}}

            {{--            </div>--}}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <ol class="list-unstyled">
                <li>
                    <b>Contact Number</b><p><a href="tel:{{$investor->phone_number}}">{{$investor->phone_number}}</a></p>
                </li>
                <li>
                    <b>Email Address</b><p><a href="email:{{$investor->email}}">{{$investor->email}}</a></p>
                </li>
                <li>
                    <b>National ID (NID)</b><p>{{$investor->nid}}</p>
                </li>
                <li>
                    <b>Address</b><p>{{$investor->address}}</p>
                </li>
            </ol>
        </div>
{{--        <div class="col-md-7 col-lg-7 border-pink">--}}
{{--            <div class="align-content-end">--}}
{{--                <h5>Assigned Projects</h5>--}}
{{--                <table class="table table-bordered align-content-center">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="title">Active<small>(n)</small></th>--}}
{{--                        <th>Project</th>--}}
{{--                        <th>Invested Amount</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td><span class="badge badge-pill badge-success text-light font-size-15 p-2">active</span> </td>--}}
{{--                        <td>Demo</td>--}}
{{--                        <td>Demo</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td></td>--}}
{{--                        <td>nill</td>--}}
{{--                        <td>nill</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td></td>--}}
{{--                        <td>nill</td>--}}
{{--                        <td>nill</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    @include('inc.account')
@endsection
@section('page-js')
    @include('extras.datatable-js')
    <script>
        $(document).ready(function() {
            var groupColumn = 5;
            let table = $("#account").DataTable({
                "buttons":["copy","excel","pdf","colvis"],
                "columnDefs": [
                    // { "visible": false, "targets": groupColumn,},
                    {'orderable' : false, "targets": [0,2,3,4,5,6]}
                ],
                "fixedHeader": {
                    header: true,
                    footer: true
                },
                "order": [[1, 'desc']],
                "displayLength": 25,
            } );
            table.buttons().container().appendTo("#account_wrapper .col-md-6:eq(0)");
        } );
    </script>
@endsection
