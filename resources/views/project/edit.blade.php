@extends('layouts.page')

@section('page-title')
    @include('components.page-title')
@endsection

@section('content')
    <h4 class="card-title mb-4">Edit Project</h4>
    <form action="{{route('project.update', $project->id)}}" method="post">
        @csrf
        @method('put')
        @include('project.inc.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary justify-content-end">Update Project</button>
        </div>
    </form>
@endsection



