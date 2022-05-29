@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('page-css')
    @include('extras.datatable-css')
@endsection
@section('content')
    <div class="row">
        <h3 class="card-title">
            {{$supplier->name}}
            <span class="badge {{$supplier->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$supplier->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('supplier.destroy',$supplier->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('supplier.edit',$supplier->id)}}">
                            <i class="fa fa-edit"></i>
                            <span class="text-alias"> Edit</span></a>
                        <button class="btn btn-danger w-xs" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                            <i class="fas fa-trash-alt"></i>
                            <span class="text-alias"> Delete</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <ol class="list-unstyled">
                <li>
                    <b>Name</b><p><a href="tel:{{$supplier->name}}">{{$supplier->name}}</a></p>
                </li>
                <li>
                    <b>Contact Number</b><p><a href="tel:{{$supplier->phone_number}}">{{$supplier->phone_number}}</a></p>
                </li>
                <li>
                    <b>Email Address</b><p><a href="email:{{$supplier->email}}">{{$supplier->email}}</a></p>
                </li>
                <li>
                    <b>National ID (NID)</b><p>{{$supplier->nid}}</p>
                </li>
                <li>
                    <b>Address</b><p>{{$supplier->address}}</p>
                </li>
            </ol>
        </div>
        <div class="col-md-7 col-lg-7 border-pink">
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
