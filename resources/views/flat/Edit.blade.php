@extends('layouts.page')

@section('page-title')
    @include('components.page-title')
@endsection

@section('content')
    <h4 class="card-title mb-4">Edit Flat</h4>
    <form action="{{route('flat.update', $flat->id)}}" method="post">
        @csrf
        @method('put')
        @include('flat.forms.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary justify-content-end">Update </button>
        </div>
    </form>
@endsection



