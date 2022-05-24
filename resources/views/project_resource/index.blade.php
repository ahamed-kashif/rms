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
            <p class="card-title-desc">Enlisted projects showing below. We have
                <code> total {{$medias->count()}} projects</code>.
            </p>
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2">
            <div class="row">
                <a href="{{$new_upload_url}}" class="ml-auto btn btn-secondary px-4" title="Add material"><i class="fas fa-plus font-size-16"></i></a>
            </div>
        </div>
    </div>

    <hr>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th scope="col" style="width: 100px">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($medias as $media)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$media->file_name}}</td>
                <td>{{date_format(date_create($media->updated_at),'d M, yy')}}</td>
                <td>
                    <div class="dropdown align-content-center">
                        <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">
                            <a class="dropdown-item" href="{{route('resource.download',[$project->id,$media->uuid])}}"><i class="fas fa-cloud-download-alt"></i><span class="text-alias"> Download</span></a>
                            <form action="{{route('resource.destroy',[$project->id,$media->uuid])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="dropdown-item text-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="text-alias"> Delete</span>
                                </button>
                            </form>
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
@endsection
