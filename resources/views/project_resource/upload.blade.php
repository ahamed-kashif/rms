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
        <form action="{{route('resource.update',$project->id)}}" class="dropzone dz-clickable" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="fallback">
                <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick">
                <div class="mb-3">
                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                </div>

                <h4>Drop files here or click to upload.</h4>
            </div>
        </form>
    </div>

    <div class="text-center mt-4">
        <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
    </div>
@endsection
@push('custom-css')
    @include('extras.dropzone-css')
@endpush
@push('custom-js')
    @include('extras.dropzone-js')
@endpush
