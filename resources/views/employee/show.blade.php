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
            {{$employee->name}}
            <span class="badge {{$employee->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$employee->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('employee.destroy',$employee->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('employee.edit',$employee->id)}}">
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
            {{--                <a class="btn btn-outline-primary" href="{{route('employee.edit',$employee->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>--}}
            {{--                <form action="{{route('employee.destroy',$employee->id)}}" method="post">--}}
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
                    <b>Contact Number</b><p><a href="tel:{{$employee->phone}}">{{$employee->phone}}</a></p>
                </li>
                <li>
                    <b>Email Address</b><p><a href="email:{{$employee->email}}">{{$employee->email}}</a></p>
                </li>
                <li>
                    <b>National ID (NID)</b><p>{{$employee->nid}}</p>
                </li>
                <li>
                    <b>Address</b><p>{{$employee->address}}</p>
                </li>
            </ol>
        </div>
        <div class="col-md-7 col-lg-7">
            @include('inc.drive')
        </div>
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
