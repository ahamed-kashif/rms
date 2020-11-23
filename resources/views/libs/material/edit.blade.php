@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{$material->title}}</h4>

    <form action="{{route('material.update', $material->id)}}" method="post">
        @csrf
        @method('PUT')
        @include('libs.material.inc.form')
    </form>
@endsection
