@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('page-css')
    @include('extras.select2-css')
@endsection
@section('content')
    <form action="{{route('invoice.salary.update')}}" method="post">
        @csrf
        <div class="mt-3">
            <label for="employee_id">Employee</label>
            <select name="employee_id" id="employee_id" class="form-control">
                <option value="" selected disabled>Select</option>
                @foreach($employees as $emp)
                    <option value="{{$emp->id}}">{{$emp->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="payment_method_id">Payment Method</label>
            <select name="payment_method_id" id="payment_method_id" class="form-control">
                <option value="" selected disabled>Select</option>
                @foreach($pms as $emp)
                    <option value="{{$emp->id}}">{{$emp->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" value="0" class="form-control">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Pay</button>
        </div>
    </form>
@endsection
@section('page-js')
    @include('extras.select2-js')
    <script>
        $(document).ready(function(){
            $('select').select2();
        })
    </script>
@endsection
