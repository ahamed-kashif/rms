@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div>
        <form id="dropzone" action="{{$upload_url}}" class="dropzone" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
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
                <a href="{{$back_url}}" class="btn btn-secondary waves-effect waves-light"><i class="bx bx-arrow-back"></i>Back to{{$entity}}</a>
            </div>
        </div>
        <div class="col-6">
            <div class="text-right mt-4">
                <a href="{{$browse_url}}" class="btn btn-primary waves-effect waves-light">Browse Files</a>
            </div>
        </div>
    </div>
@endsection
@section('page-css')
    @include('extras.dropzone-css')
@endsection
@section('page-js')
    @include('extras.dropzone-js')
    <script type="text/javascript" src="{{asset('js/restapi.js')}}"></script>
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            addRemoveLinks: true,
            removedfile: function(file) {
                let url = '{{$delete_url}}';
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
@endsection
