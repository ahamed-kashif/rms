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
            <p class="card-title-desc">Total amount invested on materials for this project
                <code>{{$total}} BDT</code>.
            </p>
        </div>
{{--        <div class="col-sm-2 col-lg-2 col-md-2">--}}
{{--            <div class="row">--}}
{{--                <a href="{{route('project.create')}}" class="ml-auto btn btn-secondary px-4" title="Add material"><i class="fas fa-plus font-size-16"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <h5>Materials</h5><br>
    <div class="table-responsive">
        <table>
            <tbody class="table table-striped table-bordered">
            @foreach($totalMaterials as $k => $tm)
                <tr>
                    <th>{{$k}}</th>
                    <td>{{$tm}} {{\App\Models\Material::where('title',$k)->first()->unit}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <hr>
    <h5>Material Invoice History</h5><br>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th scope="col" style="width: 100px">#</th>
            <th scope="col">Invoice No.</th>
            <th scope="col">Material</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
            <th scope="col">Supplier</th>
            <th scope="col">Added at</th>
        </tr>

        </thead>
        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$material->invoice_no}}</td>
                <td>{{$material->materials->first()->title}}</td>
                <td>{{$material->materials->first()->pivot->qty}} {{$material->materials->first()->unit}}</td>
                <td>{{$material->amount}}</td>
                <td>{{$material->person->name}}</td>
                <td>{{date_format(date_create($material->created_at),'d M, yy')}}</td>
{{--                <td>--}}
{{--                    <div class="dropdown align-content-center">--}}
{{--                        <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>--}}
{{--                        <a class="dropdown-item" href="{{route('project-material.material.index.index',$project->id)}}"><i class="fa fa-eye"></i><span class="text-alias"> Materials</span></a>--}}
{{--                    </div>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('page-js')
    @include('extras.datatable-js')
@endsection
