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
    @include('inc.account')
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
                    {'orderable' : false, "targets": [0,2,3,4,5,6,7,8]}
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
                    let person = this.api().column(6)
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
                    let paymentMethod = this.api().column(7)
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

                    let project = this.api().column(5)
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
