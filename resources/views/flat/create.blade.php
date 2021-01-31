@extends('layouts.page')

@section('page-title')
    @include('components.page-title')
@endsection

@section('content')
    <h4 class="card-title mb-4">Add New Flat</h4>
    <form action="{{route('flat.store')}}" method="post">
        @csrf
        @include('flat.forms.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary justify-content-end">Add</button>
        </div>
    </form>
@endsection
