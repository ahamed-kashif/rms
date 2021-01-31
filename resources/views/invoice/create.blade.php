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
                <button type="submit" class="btn btn-outline-info btn-lg btn-block waves-effect waves-light mb-1">Check In</button>
            </form>
            <form action="{{route('invoice.initial')}}" method="post">
                @csrf
                <input type="hidden" name="is_checkin" value="0" />
                <button type="submit" class="btn btn-outline-secondary btn-lg btn-block waves-effect waves-light mb-1">Check Out</button>
            </form>
        </div>
@endsection
@section('footer')
        Press <abbr title="testing">Check In</abbr> or <abbr title="test">Check Out</abbr> to create Invoice.
@endsection
