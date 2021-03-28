@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">New Flat</h4>

    <form action="{{route('flat.store',$customer_id)}}" method="post">
        @csrf
        <input type="hidden" id="customer_id" name="customer_id" value="{{$customer_id}}">
        <input type="hidden" id="project_id" name="project_id" value="{{$project_id}}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_title">Flat Title<code>*</code></label>
                    <input type="text" class="form-control" id="flat_title" name="flat_title" placeholder="Ex: R-1" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="form-check font-size-14">
                    <input class="form-check-input" type="checkbox"  name="is_avail_loan" id="is_avail_loan" value="0" >
                    <label class="form-check-label" for="is_avail_loan">Loan Available</label>
                 </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                      <label for="flat_floor">Flat Floor<code>*</code></label>
                      <input type="text" class="form-control" id="flat_floor" name="flat_floor" placeholder="EX: 1" required>
                 </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                      <label for="size">Size (SQRFeet)<code>*</code></label>
                      <input type="number" class="form-control" id="size" name="size" placeholder="EX: 1200" required>
                 </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                      <label for="car_parking_no">Car Parking NO.<code>*</code></label>
                      <input type="text" class="form-control" id="size" name="car_parking_no" placeholder="EX: 1200" required>
                 </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                      <label for="particulars">Particulars<code>*</code></label>
                      <textarea type="text" class="form-control" id="particulars" name="particulars"></textarea>
                 </div>
            </div>
        </div>

        <br>

         <div class="row">
             <div class="col-md-12">
                 <div class="form-check font-size-14">
                       <input class="form-check-input" type="checkbox"  name="is_installable" id="is_installable" value="0" >
                       <label class="form-check-label" for="is_installable">Installable</label>
                 </div>
             </div>
         </div>
        <br>
        <div class="row">
              <div class="col-md-12">
                   <div class="form-group">
                       <label for="installment_duration">Installment Duration <code>*</code></label>
                       <input type="text" class="form-control" id="installment_duration" name="installment_duration" placeholder="EX: 4 months">
                   </div>
              </div>
        </div>
        <div class="row">
               <div class="col-md-12">
                   <div class="form-group">
                        <label for="installment_amount">Installment Amount <code>*</code></label>
                        <input type="text" class="form-control" id="installment_amount" name="installment_amount" placeholder="EX: 4000 tk" required>
                   </div>
               </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_amount">Flat Amount <code>*</code></label>
                    <input type="text" class="form-control" id="flat_amount" name="flat_amount" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_booking">Flat Booking Amount <code>*</code></label>
                    <input type="number" class="form-control" id="flat_booking" name="flat_booking" placeholder="EX: 1000000 tk" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_downpayment">Flat Down payment <code>*</code></label>
                    <input type="text" class="form-control" id="flat_downpayment" name="flat_downpayment" placeholder="EX: 1000000 tk" required>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>
    </form>
@endsection
