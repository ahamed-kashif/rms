@extends('layouts.page')
@section('page-css')
 @include('extras.select2-css')
@endsection
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">New Customer</h4>

    <form action="{{route('customer.store')}}" method="post">
        @csrf
        @include('libs.customer.form.form')
        <div class="my-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>

    </form>
@endsection
@section('page-js')
    @include('extras.select2-js')
<script>
    $(document).ready(function(){
        $('#project_id').select2();
    })
</script>
@endsection
