@extends('layouts.invoice')

@section('title')
    {{$invoice->invoice_no}}
@endsection
@section('subtitle')
    PAYMENT METHOD
@endsection
@section('content')
    <div class="p-5">
        @foreach($paymentMethods as $pm)
            <form action="{{route('invoice.payment.method.update')}}" method="post">
                @csrf
                <input type="hidden" name="payment_method_id" value="{{$pm->id}}" />
                <button type="submit" class="btn btn-outline-success btn-lg btn-block waves-effect waves-light mb-1">{{ucfirst($pm->title)}}</button>
            </form>
        @endforeach
    </div>
@endsection
@section('footer')
    Select a Payment Method
@endsection

