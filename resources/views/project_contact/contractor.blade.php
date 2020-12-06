@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <h5>Add Contractor</h5>
            <form action="{{route('project.contractor.add',$project->id)}}" method="POST">
                @csrf
                <div class="form-group p-3">
                    <label for="contractor">Contractor</label>
                    <select id="contractor" name="contractor" class="form-control select2">
                        <option>Select a Contractor</option>
                        @foreach($contractors as $contractor)
                            <option value="{{$contractor->id}}">{{$contractor->name}}</option>
                        @endforeach
                    </select>
                    <label for="contractor_type" class="mt-1">Contractor Type</label>
                    <select id="contractor_type" name="contractor_type" class="form-control select2">
                        <option>Select a Contractor Type</option>
                        @foreach($materials as $material)
                            <option value="{{$material->title}}">{{$material->title}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-md-6">
            <h5>Add New Contractor</h5>
            <form action="{{route('project.contractor.add.new',$project->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="contractor_name">Name</label>
                            <input type="text" id="contractor_name" name="contractor_name" placeholder="Enter Contractor's name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="contractor_phone">Phone</label>
                            <input type="text" id="contractor_phone" name="contractor_phone" placeholder="Enter Contractor's phone number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="new_contractor_type">Contractor Type</label>
                            <select id="new_contractor_type" name="contractor_type" class="form-control select2">
                                <option>Select a Contractor Type</option>
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
    <h5 class="mt-4">Assigned Contractors</h5>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th scope="col" style="width: 100px">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Type</th>
        </tr>

        </thead>
        <tbody>
        @foreach($project->contractors()->get() as $contractor)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{route('contractor.show',$contractor->id)}}">{{$contractor->name}}</a></td>
                <td><a href="tel:{{$contractor->phone_number}}">{{$contractor->phone_number}}</a></td>
                <td>{{$contractor->pivot->purpose}}</td>
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
            $('#contractor').select2({
                placeholder: "Select a Constructor",
            });
            $('#contractor_type').select2({
                placeholder: "Select a contractor type",
                tags:true,
            });
            $('#new_contractor_type').select2({
                placeholder: "Select a contractor type",
                tags:true,
            });
        });
    </script>
@endpush
