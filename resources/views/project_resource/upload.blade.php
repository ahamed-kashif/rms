@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title">Dropzone</h4>
    <p class="card-title-desc">DropzoneJS is an open source library
        that provides drag’n’drop file uploads with image previews.
    </p>

    <div>
        <form id="dropzone" action="{{route('ajax.upload.resource',$project->id)}}" class="dropzone" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="fallback">
                <input id="file" name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick">
                <div class="mb-3">
                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                </div>

                <h4>Drop files here or click to upload.</h4>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="text-left mt-4">
                <a href="{{route('project.show',$project->id)}}" class="btn btn-secondary waves-effect waves-light"><i class="bx bx-arrow-back"></i>Back to project</a>
            </div>
        </div>
        <div class="col-6">
            <div class="text-right mt-4">
                <a href="{{route('resource.index',$project->id)}}" class="btn btn-primary waves-effect waves-light">Browse Files</a>
            </div>
        </div>
    </div>
@endsection
@push('custom-css')
    @include('extras.dropzone-css')
    @include('extras.dropzone-js')
@endpush
@push('custom-js')
    <script type="text/javascript" src="{{asset('js/restapi.js')}}"></script>
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            addRemoveLinks: true,
            removedfile: function(file) {
                let url = '{{route('ajax.delete.resource.by_name',$project->id)}}';
                let file_name = file.upload.filename;
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    data: {api_token: $api_token, file: file_name},
                    url: url,
                    success: function (data){
                        console.log(data);
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                let fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        }
    </script>
@endpush
