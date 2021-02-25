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
            {{$customer->full_name}}

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('customer.edit',$customer->id)}}">
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
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Father/Husband's Number</th>
                            <td>{{$customer->father_or_husband_name}}</td>
                        </tr>
                        <tr>
                            <th>Mother's Number</th>
                            <td>{{$customer->mother_name}}</td>
                        </tr>
                        <tr>
                            <th>Occupation</th>
                            <td>{{$customer->occupation}}</td>
                        </tr>
                        <tr>
                            <th>NID</th>
                            <td>{{$customer->nid}}</td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td><a href="tel:{{$customer->phone_number}}">{{$customer->phone_number}}</a></td>
                        </tr>
                        <tr>
                            <th>Flat NO.</th>
                            <td>{{$customer->flats->first()->flat_number}}</td>
                        </tr>
                        <tr>
                            <th>Flat Title</th>
                            <td>{{$customer->flats->first()->flat_title}}</td>
                        </tr>
                        <tr>
                            <th>Project Name</th>
                            <td>{{$customer->flats->first()->project->name}}</td>
                        </tr>
                        <tr>
                            <th>Project Address</th>
                            <td>{{$customer->flats->first()->project->address}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                    {'orderable' : false, "targets": [0,2,3,4,5,6,7]}
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
