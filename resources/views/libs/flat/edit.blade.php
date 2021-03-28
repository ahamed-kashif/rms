@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{isset($flat) ? $flat->flat_title : ''}}</h4>

    <form action="{{route('flat.update', $flat->id)}}" method="post">
        @csrf
        <input type="hidden" id="customer_id" name="customer_id" value="{{$flat->customer_id}}">
        <input type="hidden" id="project_id" name="project_id" value="{{$flat->project_id}}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_title">Flat Title<code>*</code></label>
                    <input type="text" class="form-control" id="flat_title" name="flat_title" value="{{$flat->flat_title}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-check font-size-14">
                    <input class="form-check-input" type="checkbox"  name="is_avail_loan" id="is_avail_loan" value="{{$flat->is_avail_loan}}" >
                    <label class="form-check-label" for="is_avail_loan">Loan Available</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_number">Flat Number <code>*</code></label>
                    <input type="text" class="form-control" id="flat_number" name="flat_number" value="{{$flat->flat_number}}" required>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="form-check font-size-14">
                    <input class="form-check-input" type="checkbox"  name="is_installable" id="is_installable" value="{{$flat->is_installable}}" >
                    <label class="form-check-label" for="is_installable">Installable</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="installment_duration">Installment Duration <code>*</code></label>
                    <input type="text" class="form-control" id="installment_duration" name="installment_duration" value="{{$flat->installment_duration}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="installment_amount">Installment Amount <code>*</code></label>
                    <input type="text" class="form-control" id="installment_amount" name="installment_amount" value="{{$flat->installment_amount}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="booking_amount">Booking Amount <code>*</code></label>
                    <input type="text" class="form-control" id="booking_amount" name="booking_amount" value="{{$flat->booking_amount}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_amount">Flat Amount <code>*</code></label>
                    <input type="text" class="form-control" id="flat_amount" name="flat_amount" value="{{$flat->flat_amount}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_utility">Flat Utility <code>*</code></label>
                    <input type="text" class="form-control" id="flat_utility" name="flat_utility" value="{{$flat->flat_utility}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_car_parking">Flat Car Parking <code>*</code></label>
                    <input type="text" class="form-control" id="flat_car_parking" name="flat_car_parking" value="{{$flat->flat_car_parking}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_total_received">Flat Total Received <code>*</code></label>
                    <input type="text" class="form-control" id="flat_total_received" name="flat_total_received" value="{{$flat->flat_total_received}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_initial_received">Flat Received(Initial) <code>*</code></label>
                    <input type="text" class="form-control" id="flat_initial_received" name="flat_initial_received" value="{{$flat->flat_initial_received}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_balance">Flat Balance <code>*</code></label>
                    <input type="text" class="form-control" id="flat_balance" name="flat_balance" value="{{$flat->flat_balance}}" >
                </div>
            </div>
        </div>






        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>

    </form>
@endsection
