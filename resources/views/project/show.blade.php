@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
    @include('extras.select2-css')
    @include('extras.bootstrap-datepicker-css')
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
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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

        <div class="col-lg-4">
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
    </div>
    <!-- end row -->
    <h4 class="text-center">Accounts</h4>
    <hr>
    <table id="account" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

        <thead class="bg-secondary text-light">
        <tr>
            <th>Date</th>
            <th>Invoice NO.</th>
            <th>Received</th>
            <th>Expense</th>
            <th>Total(&#2547)</th>
            <th>Person</th>
            <th>Payment Method</th>
            <th>Purpose</th>
        </tr>

        </thead>
        <tbody>

        @if($accounts != 0)
        @foreach($accounts['invoices'] as $invoice)
            <tr>
                <td>{{date_format(date_create($invoice->created_at),'d-m-Y')}}</td>
                <td>{{$invoice->invoice_no}}</td>
                <td>{{$invoice->is_checkin ? $invoice->amount : '-'}}</td>
                <td>{{$invoice->is_checkin ?  '-' : $invoice->amount}}</td>
                <td>{{$accounts['balance'][$invoice->id]}}</td>
                <td>{{$invoice->is_office_expense == 1 ? $invoice->person_name : $invoice->person->name}}</td>
                <td>{{$invoice->PaymentMethod->title}}</td>
                <td>{{$invoice->description}}</td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
@endsection
@section('page-js')
    @include('extras.datatable-js')
    @include('extras.select2-js')
    @include('extras.bootstrap-datepicker-js')
    <script>
        $(document).ready(function() {
            $('#project').select2();
            $('#payment_method').select2();
            $('#person').select2();
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
