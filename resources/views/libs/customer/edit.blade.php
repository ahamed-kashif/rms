@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{isset($customer) ? $customer->name : ''}}</h4>

    <form action="{{route('customer.update', $customer->id)}}" method="post" id="customer-edit">
        @csrf
        @method('put')
        @include('libs.customer.form.form')
        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>
    </form>
@endsection

