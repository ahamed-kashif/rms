@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <h5>Add Supplier</h5>
            <form action="{{route('project.supplier.add',$project->id)}}" method="POST">
                @csrf
                <div class="form-group p-3">
                    <label for="supplier">Supplier</label>
                    <select id="supplier" name="supplier" class="form-control select2">
                        <option value="">Select a supplier</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                    <label for="supplier_type" class="mt-1">Supplier Type</label>
                    <select id="supplier_type" name="supplier_type" class="form-control select2">
                        <option value="">Select a supplier Type</option>
                        @foreach($materials as $material)
                            <option value="{{$material->title}}">{{$material->title}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-md-6">
            <h5>Add New supplier</h5>
            <form action="{{route('project.supplier.add.new',$project->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="supplier_name">Name</label>
                            <input type="text" id="supplier_name" name="supplier_name" placeholder="Enter supplier's name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="supplier_phone">Phone</label>
                            <input type="text" id="supplier_phone" name="supplier_phone" placeholder="Enter supplier's phone number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="new_supplier_type">Supplier Type</label>
                            <select id="new_supplier_type" name="supplier_type" class="form-control select2">
                                <option value="">Select a supplier Type</option>
                                @foreach($materials as $material)
                                    <option value="{{$material->title}}">{{$material->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Save & Add</button>
            </form>
        </div>
    </div>
    <hr>
    <h5 class="mt-4">Assigned Suppliers</h5>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th scope="col" style="width: 100px">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($project->suppliers()->get() as $supplier)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{route('supplier.show',$supplier->id)}}">{{$supplier->name}}</a></td>
                <td><a href="tel:{{$supplier->phone_number}}">{{$supplier->phone_number}}</a></td>
                <td>{{$supplier->pivot->purpose}}</td>
                <td>
                    <form action="{{route('project.supplier.remove',[$project->id,$supplier->id])}}" method="post">
                        @csrf
                        @method('put')
                        <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Are you sure?')">remove</button>
                    </form>
                </td>
                {{--                    <td>--}}
                {{--                        <div class="dropdown align-content-center">--}}
                {{--                            <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>--}}
                {{--                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">--}}
                {{--                                <a class="dropdown-item" href="{{route('project.edit',$project->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>--}}
                {{--                                <form action="{{route('project.destroy',$project->id)}}" method="POST">--}}
                {{--                                    @csrf--}}
                {{--                                    @method('DELETE')--}}
                {{--                                    <button  class="dropdown-item text-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">--}}
                {{--                                        <i class="fas fa-trash-alt"></i>--}}
                {{--                                        <span class="text-alias"> Delete</span>--}}
                {{--                                    </button>--}}
                {{--                                </form>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
@push('custom-css')
    @include('extras.datatable-css')
    @include('extras.select2-css')
@endpush
@push('custom-js')
    @include('extras.datatable-js')
    @include('extras.select2-js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#supplier').select2({
                placeholder: "Select a Constructor",
            });
            $('#supplier_type').select2({
                placeholder: "Select a supplier type",
                tags:true,
            });
            $('#new_supplier_type').select2({
                placeholder: "Select a supplier type",
                tags:true,
            });
        });
    </script>
@endpush
