@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
@endsection

@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row p-2">
        <div class="col-sm-10 col-lg-10 col-md-10">
{{--            <p class="card-title-desc">List of contractors showing below. We have--}}
{{--                <code> total {{$invoice->count()}} contractors</code> out of which <code>{{$contractors->where('is_active',1)->count()}} contractors</code>  are <code>active</code>.--}}
{{--            </p>--}}
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2">
            <div class="row">
                <a href="{{route('invoice.create')}}" class="ml-auto btn btn-secondary px-4" title="Create invoice">CREATE <i class="fas fa-file-invoice font-size-16"></i></a>
            </div>
        </div>
    </div>

    <hr>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Date</th>
            <th>Invoice NO.</th>
            <th>Person</th>
            <th>Person Type</th>
            <th>Project</th>
            <th>Status</th>
            <th>Amount(&#2547)</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{{date_format(date_create($invoice->updated_at),'d/m/Y')}}</td>
                <td>{{$invoice->invoice_no}}</td>
                <td>
                    {{$invoice->person_name}}
                </td>
                <td>{{$invoice->is_office_expense == 0 ? $relations[$invoice->person_type] : 'Other'}}</td>
                <td>{{$invoice->project_id == 0 ? 'Employee Salary' : $invoice->project->name}}</td>
                <td>{{$invoice->is_checkin ? 'Checkin' : 'Checkout'}}</td>
                <td>{{$invoice->amount}}</td>
                <td>
                    <div class="dropdown align-content-center">
                        <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">
                            <a class="dropdown-item" href="{{route('invoice.show',$invoice->id)}}"><i class="fas fa-file-invoice font-size-16"></i><span class="text-alias"> Print</span></a>
                            @can('edit invoice')
                                <a class="dropdown-item" href="{{route('invoice.show',$invoice->id)}}"><i class="fas fa-file-invoice font-size-16"></i><span class="text-alias"> Edit</span></a>
                            @endcan
{{--                            <form action="{{route('contractor.destroy',$contractor->id)}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button  class="dropdown-item text-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">--}}
{{--                                    <i class="fas fa-trash-alt"></i>--}}
{{--                                    <span class="text-alias"> Delete</span>--}}
{{--                                </button>--}}
{{--                            </form>--}}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('page-js')
    @include('extras.datatable-js')
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#datatable-buttons').DataTable( {--}}

{{--            } );--}}
{{--        } );--}}
{{--    </script>--}}
@endsection
