@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">New Flat</h4>

    <form action="" method="post">
        @csrf
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
                    <input class="form-check-input" type="checkbox"  name="is_avail_loan" id="is_avail_loan" value="1" >
                    <label class="form-check-label" for="is_avail_loan">Loan Available</label>
                 </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                      <label for="flat_number">Flat Number <code>*</code></label>
                      <input type="text" class="form-control" id="flat_number" name="flat_number" placeholder="EX: 1122" required>
                 </div>
            </div>
        </div>

        <br>

         <div class="row">
             <div class="col-md-12">
                 <div class="form-check font-size-14">
                       <input class="form-check-input" type="checkbox"  name="is_installable" id="is_installable" value="1" >
                       <label class="form-check-label" for="is_installable">Installable</label>
                 </div>
             </div>
         </div>
        <br>
        <div class="row">
              <div class="col-md-12">
                   <div class="form-group">
                       <label for="installment_duration">Installment Duration <code>*</code></label>
                       <input type="text" class="form-control" id="installment_duration" name="installment_duration" placeholder="EX: 4 months" required>
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
                            <label for="booking_amount">Booking Amount <code>*</code></label>
                            <input type="text" class="form-control" id="booking_amount" name="booking_amount" placeholder="Ex: 10000 tk" required>
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
                    <label for="flat_utility">Flat Utility <code>*</code></label>
                    <input type="text" class="form-control" id="flat_utility" name="flat_utility" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_car_parking">Flat Car Parking <code>*</code></label>
                    <input type="text" class="form-control" id="flat_car_parking" name="flat_car_parking" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_total_received">Flat Total Received <code>*</code></label>
                    <input type="text" class="form-control" id="flat_total_received" name="flat_total_received" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_initial_received">Flat Received(Initial) <code>*</code></label>
                    <input type="text" class="form-control" id="flat_initial_received" name="flat_initial_received" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="flat_balance">Flat Balance <code>*</code></label>
                    <input type="text" class="form-control" id="flat_balance" name="flat_balance" placeholder="EX: 4000 tk" required>
                </div>
            </div>
        </div>






        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>

    </form>
@endsection
