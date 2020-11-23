@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">New Material</h4>

    <form action="{{route('material.store')}}" method="post">
        @csrf
        @include('libs.material.inc.form')
    </form>
@endsection
