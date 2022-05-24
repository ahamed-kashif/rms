@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="invoice-title">
        <h4 class="float-right font-size-16">Invoice No. # {{$invoice->invoice_no}}</h4>
        <div class="mb-4">
            <img src="{{asset('images/logo.png')}}" alt="shrel" height="50"/>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 mt-3 font-size-18">
            <address>
                <strong>Payment Method</strong><br>
                {{$invoice->PaymentMethod->title}}<br>
            </address>
        </div>
        <div class="col-sm-6 mt-3 text-sm-right font-size-18">
            <address>
                <strong>Transaction Date</strong><br>
                {{date_format(date_create($invoice->created_at), 'd M, Y')}}<br><br>
            </address>
        </div>
    </div>
    <div class="py-2 mt-3">
        <h3 class="font-size-18 font-weight-bold">Description</h3>
    </div>
    <form action="{{route('invoice.amount.update', $invoice->id)}}" method="post">
        @csrf
        <div class="form-group">
            <textarea class="form-control bg-soft-secondary" id="description" name="description" rows="3"></textarea>
        </div>
        @if($invoice->is_checkin)
            <span>Taka received by <b>{{auth()->user()->name}}</b></span>
        @else
            <span>Taka paid by <b>{{auth()->user()->name}}</b></span>
        @endif
        <div class="text-right">
            <label class="font-weight-bold font-size-17">Amount(&#2547)</label>
            <input type="number" class="bg-soft-warning font-size-18 font-weight-semibold text-right text-danger" name="amount">
        </div>
        <div class="d-print-none">
            <div class="float-right mt-3">
                {{--            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>--}}
                <button type="submit" class="btn btn-primary btn-lg w-md waves-effect waves-light">UPDATE</button>
            </div>
        </div>
    </form>
@endsection
