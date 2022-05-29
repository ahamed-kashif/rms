@extends('layouts.invoice')
@section('title')
    GET STARTED
@endsection
@section('subtitle')
    Creating Invoice...
@endsection
@section('content')
        <div class="p-5">
            <form action="{{route('invoice.initial')}}" method="post">
                @csrf
                <input type="hidden" name="is_checkin" value="1" />
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Receive</button>
            </form>
            <form action="{{route('invoice.initial')}}" method="post">
                @csrf
                <input type="hidden" name="is_checkin" value="0" />
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Expense</button>
            </form>
        </div>
@endsection
@section('footer')
        Press <abbr title="If you are receiving an amount, then select Credit.">Credit</abbr> or <abbr title="If you are paying an amount, then select Debit.">Debit</abbr> to create Invoice.
@endsection
