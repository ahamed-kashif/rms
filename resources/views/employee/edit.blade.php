@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
@endsection
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
<form action="{{route('employee.update',$employee->id)}}" method="post">
    @csrf
    @method('PUT')
    @include('employee.form.form')
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
@section('page-js')
{{--    @include('extras.datatable-js')--}}
@endsection
