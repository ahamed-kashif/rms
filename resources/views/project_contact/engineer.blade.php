@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row mb-2">
        <div class="col-lg-6 col-md-6">
            <h5>Add Engineer</h5>
            <form action="{{route('project.engineer.add',$project->id)}}" method="POST">
                @csrf
                <div class="form-group p-3">
                    <label for="engineer">engineer</label>
                    <select id="engineer" name="engineer" class="form-control select2">
                        <option value="">Select a engineer</option>
                        @foreach($engineers as $engineer)
                            <option value="{{$engineer->id}}">{{$engineer->name}}</option>
                        @endforeach
                    </select>
                    <label for="engineer_type" class="mt-1">engineer Type</label>
                    <select id="engineer_type" name="engineer_type" class="form-control select2">
                        <option>Select a engineer Type</option>
                        @foreach($materials as $material)
                            <option value="{{$material->title}}">{{$material->title}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-md-6">
            <h5>Add New engineer</h5>
            <form action="{{route('project.engineer.add.new',$project->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="engineer_name">Name</label>
                            <input type="text" id="engineer_name" name="engineer_name" placeholder="Enter engineer's name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="engineer_phone">Phone</label>
                            <input type="text" id="engineer_phone" name="engineer_phone" placeholder="Enter Engineer's phone number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="new_engineer_type">Engineer Type</label>
                            <select id="new_engineer_type" name="engineer_type" class="form-control select2">
                                <option value="">Select a Engineer Type</option>
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
    <h5 class="mt-4">Assigned engineers</h5>
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
        @foreach($project->engineers()->get() as $engineer)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{route('engineer.show',$engineer->id)}}">{{$engineer->name}}</a></td>
                <td><a href="tel:{{$engineer->phone_number}}">{{$engineer->phone_number}}</a></td>
                <td>{{$engineer->pivot->purpose}}</td>
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
            $('#engineer').select2({
                placeholder: "Select a Engineer",
            });
            $('#engineer_type').select2({
                placeholder: "Select a Engineer type",
                tags:true,
            });
            $('#new_engineer_type').select2({
                placeholder: "Select a Engineer type",
                tags:true,
            });
        });
    </script>
@endpush
