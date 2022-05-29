@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
@endsection
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            @include('project.inc.new_overview')
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            @include('project.inc.advance')
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Contractors</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.contractors.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add contractor"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->contractors()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Suppliers</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.suppliers.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add Supplier"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->suppliers()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Engineers</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.engineers.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add Supplier"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->engineers()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Investors</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.investors.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add Supplier"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->investors()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row p-2">
        <div class="col-sm-10 col-lg-10 col-md-10">
            <h3>Customer List</h3>
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2">
            <div class="row">
                <a href="{{route('customer.create',['project_id' => $project->id])}}" class="ml-auto btn btn-secondary px-4" title="Add customers"><i class="fas fa-user-plus font-size-16"></i></a>
            </div>
        </div>
    </div>
    <hr>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Flat</th>
            <th>Balance</th>
        </tr>

        </thead>
        <tbody>
        @foreach($project->customers()->get() as $customer)

            <tr>
                <td><a href="{{route('customer.show',$customer->id)}}">{{$customer->full_name}}</a></td>
                <td>{{$customer->phone_number}}</td>
                <td>{{$customer->flats->flat_title}}</td>
                <td>{{$customer->flats->flat_amount-$customer->total()}}</td>
            </tr>

        @endforeach
        </tbody>
    </table><br><br><hr>
    @include('inc.account')
@endsection
@section('page-js')
    @include('extras.datatable-js')
    <script type="text/javascript" src="{{asset('js/restapi.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#update_button').on('click', function () {
                let form = $('#update_status');
                let url = form.attr('action');
                let status = $('#project_status').val();
                console.log(status);
                let updateStatus = $.ajax({
                    dataType: 'json',
                    type: 'PUT',
                    data: {api_token: $api_token, status: status},
                    url: url,
                });

                updateStatus.done(function (data) {
                    alert(data.message);
                    location.reload();
                });
            });
        });
    </script>
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
