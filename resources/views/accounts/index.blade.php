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
    <div class="row p-2">
        <div class="col-sm-10 col-lg-10 col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <select class="form-control" id="project">
                        <option value="">Select Project...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="payment_method" name="payment_method">
                        <option value="">Select Payment Method...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="person" name="person">
                        <option value="">Select Person...</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <form class="col-md-12 form-inline mt-2">
                    <div class="col-md-10 p-0" method="get" action="{{route('account.index')}}">
                        <div class="form-group">
                            <label class="text-left">Accounts Date Range</label>
                            <div class="col-md-12 p-0">
                                <div class="input-daterange input-group" data-date-format="yyyy-mm-dd" data-date-autoclose="true" data-provide="datepicker" data-autofill="false">
                                    <input type="text" class="form-control" name="start" autocomplete="off">
                                    <input type="text" class="form-control" name="end" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mt-3">
                        <input type="submit" value="Filter" class="text-right btn btn-outline-secondary px-5">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2">
            <div class="row">
                <a href="{{route('invoice.create')}}" class="ml-auto btn btn-secondary px-4" title="Create invoice">CREATE <i class="fas fa-file-invoice font-size-16"></i></a>
            </div>
        </div>
    </div>
    <div class="row px-3">
        <div class="clo-12">
            <h6>Balance: </h6> <input type="text" disabled readonly value="{{number_format($balance->balance)}}" class="form-control text-white font-size-16 bg-secondary">
        </div>
    </div>
    <hr>
    <table id="account" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

        <thead class="bg-secondary text-light">
        <tr>
            <th>Date</th>
            <th>Invoice NO.</th>
            <th>Received</th>
            <th>Expense</th>
            <th>Project</th>
            <th>Person</th>
            <th>Payment Method</th>
            <th>Purpose</th>
        </tr>

        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{{date_format(date_create($invoice->created_at),'d-m-Y')}}</td>
                <td>{{$invoice->invoice_no}}</td>
                <td>{{$invoice->is_checkin ? number_format($invoice->amount) : '-'}}</td>
                <td>{{$invoice->is_checkin ?  '-' : number_format($invoice->amount)}}</td>
                <td>{{$invoice->project_id == 0 ? 'Employee Salary' : $invoice->project->name}}</td>
                <td>{{$invoice->person_name}}</td>
                <td>{{$invoice->PaymentMethod->title}}</td>
                <td>{{$invoice->description}}</td>
            </tr>
        @endforeach
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
                    {'orderable' : false, "targets": [0,1,2,3,4,5,6,7]}
                ],
                "fixedHeader": {
                    header: true,
                    footer: true
                },
                "order": [[1, 'desc']],
                "displayLength": 25,
                // "drawCallback": function ( settings ) {
                //     var api = this.api();
                //     var rows = api.rows( {page:'current'} ).nodes();
                //     var last=null;
                //
                //     api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                //         if ( last !== group ) {
                //             $(rows).eq( i ).before(
                //                 '<tr class="group"><td colspan="9" class="bg-soft-secondary"><span><strong>Balance: </strong>'+group+'</span></td></tr>'
                //             );
                //             last = group;
                //         }
                //     } );
                // }
                initComplete: function () {
                        let person = this.api().column(5)
                        let personSelect = $('#person')
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            person
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                        person.data().unique().sort().each( function ( d, j ) {
                                personSelect.append( '<option value="'+d+'">'+d+'</option>' )
                            } );
                        let paymentMethod = this.api().column(6)
                        let paymentMethodSelect = $('#payment_method')
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            paymentMethod
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                        paymentMethod.data().unique().sort().each( function ( d, j ) {
                                paymentMethodSelect.append( '<option value="'+d+'">'+d+'</option>' )
                            } );

                        let project = this.api().column(4)
                        let projectSelect = $('#project')
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            project
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                        project.data().unique().sort().each( function ( d, j ) {
                                projectSelect.append( '<option value="'+d+'">'+d+'</option>' )
                            } );

                }
            } );
            table.buttons().container().appendTo("#account_wrapper .col-md-6:eq(0)");
        } );
    </script>
@endsection
