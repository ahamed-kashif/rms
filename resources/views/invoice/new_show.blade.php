@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <br><br>
    <div class="invoice-title">
        <div class="text-right">
            <h4 class="float-right font-size-16"><span class="justify-content-end"><u>Invoice No. </u></span><br>#<span class="font-weight-bolder font-size-24">{{$invoice->invoice_no}}</span></h4>
        </div>
        <div class="mb-4">
            <img src="{{asset('images/rms.svg')}}" alt="fsrel" height="150"/>
        </div>
    </div>
    <hr style="margin-top: -40px">
    <div class="row mb-5 mt-5 border border-secondary">
        <div class="col-md-6">
            <h4 style="margin-bottom:  -30px"><u>Billing From</u></h4>
            <address class="">
                <br>
                <br>
                <strong class="font-size-24">First security real estate limited</strong><br>
                <strong class="font-size-16">Address-House 7, Road 3, F block, Banasree,<br>
                    Rampura, Dhaka-1219, Bangladesh.<br>
                    Mobile: +8801799399592<br>
                    Email: support@fsrel.com<br>
                    Website: www. fsrel.com<br></strong>
            </address>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    
                </tr>
            </tbody>
        </table>

    </div>
    <div class="row mb-4">
        <div class="col-sm-6">
            <address>
                <h4 style="margin-bottom: -10px"><u>Account Head</u></h4><br>
                <span class="font-size-18 font-weight-bold">{{$invoice->project_name}}</span><br>
                <span class="font-size-16">{{$invoice->project->address}}</span>
            </address>
        </div>
        <div class="col-sm-6 text-sm-right">
            <address>
                @if($invoice->is_checkin)
                    <h4 style="margin-bottom: -10px"><u>Received From</u></h4><br>
                @else
                    <h4 style="margin-bottom: -10px"><u>Pay To</u></h4><br>
                @endif
                <span class="font-size-18 font-weight-bold">{{ $invoice->person_name }}</span><br>
                <span class="font-size-16">{{ $invoice->person_phone }}</span><br>
            </address>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mt-3">
            <address>
                <h4 style="margin-bottom: -10px"><u>Payment Method</u></h4><br>
                <span class="font-size-16">{{$invoice->PaymentMethod->title}}</span><br>
            </address>
        </div>
        <div class="col-sm-6 mt-3 text-sm-right">
            <address>
                <h4 style="margin-bottom: -10px"><u>Invoice Date</u></h4><br>
                <span class="font-size-16">{{date_format(date_create($invoice->created_at),'d/m/Y')}}</span><br><br>
            </address>
        </div>
    </div>
    <div>
        <h3 class="font-size-18 font-weight-bold"><u>Description</u></h3>
    </div>
    <div class="bg-soft-light border-dark h-25">
        <p class="font-size-16">{{$invoice->description}}</p>
    </div>
    <div class="row  mt-5">
        <div class="col-md-6">
            @if($invoice->is_checkin)
                <span class="font-size-14">Taka received by <b>{{auth()->user()->name}}</b></span>
            @else
                <span class="font-size-14">Taka paid by <b>{{auth()->user()->name}}</b></span>
            @endif
        </div>
        <div class="col-md-6">
            <div class="text-right">
                <label class="font-weight-bold font-size-17"><u>Amount(&#2547)</u></label>
                <h2 class="font-weight-bold font-size-21 text-monospace">{{$invoice->amount}}</h2>
            </div>
        </div>
    </div><br><br><br><br><br><br><br>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <tbody>
                <tr class="col-md-12 col-lg-12 col-sm-12">
                    <th class="pb-5"><u>Receiver Signature</u></th>
                    <th class="pb-5"><u>Chief Accountant</u></th>
                </tr>
                <tr class="col-md-12 col-lg-12 col-sm-12">
                    <th class="pb-5"><u>General Manager</u></th>
                    <th class="pb-5"><u>Chairman</u></th>
                </tr>
                <tr class="col-md-12 col-lg-12 col-sm-12">
                    <th class="pb-5" colspan="12"><u>Managing Director</u></th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-print-none">
        <div class="float-right">
            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
            {{--            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>--}}
        </div>
    </div>


@endsection
