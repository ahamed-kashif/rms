@extends('layouts.page')

@section('page-title')
    @include('components.page-title')
@endsection

@section('content')
    <h4 class="card-title mb-4">Create New Project</h4>
    <form action="{{route('project.store')}}" method="post">
        @csrf
        @include('project.inc.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary justify-content-end">Create Project</button>
        </div>
    </form>
@endsection
