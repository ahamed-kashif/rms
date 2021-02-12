@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">New Customer</h4>

    <form action="{{route('customer.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="full_name">Full Name<code>*</code></label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Ex: Ashikur Rahman" required>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="father_or_husband_name">Father/Husband Name</label>
                    <input type="text" class="form-control" id="father_or_husband_name" name="father_or_husband_name" placeholder="Ex: Ashikur Rahman">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="mother_name">Mother Name</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Ex: Rahima Begume">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Ex: Business">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Ex: 1/1/1990" required>
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Ex: Bangladeshi">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone <code>*</code></label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Ex: 01*********" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="Ex: 1234423353">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nominee_name">Nominee Name <code>*</code></label>
                    <input type="text" class="form-control" id="nominee_name" name="nominee_name" placeholder="Ex: Shozibul Islam" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="present_address">Present Address <code>*</code></label>
                    <input type="text" class="form-control" id="present_address" name="present_address" placeholder="Ex: house: x, dhaka" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="permanent_address">Permanent Address <code>*</code></label>
                    <input type="text" class="form-control" id="permanent_address" name="permanent_address" placeholder="Ex: house: x, dhaka" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="reference_person_name">Reference Person Name <code>*</code></label>
                    <input type="text" class="form-control" id="reference_person_name" name="reference_person_name" placeholder="Ex: Shozibul Islam" required>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="project_id">Select Project</label>
            <select class="select2-single form-control" name="project_id" id="project_id" required>
                <option>Select any project</option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
        </div>


{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-check font-size-14">--}}
{{--                    <input class="form-check-input" type="checkbox"  name="is_avail_loan" id="is_avail_loan" value="1" >--}}
{{--                    <label class="form-check-label" for="is_avail_loan">Loan Available</label>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="flat_number">Flat Number <code>*</code></label>--}}
{{--                    <input type="text" class="form-control" id="flat_number" name="flat_number" placeholder="EX: 1122" required>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <br>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-check font-size-14">--}}
{{--                    <input class="form-check-input" type="checkbox"  name="is_installable" id="is_installable" value="1" >--}}
{{--                    <label class="form-check-label" for="is_installable">Installable</label>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="installment_duration">Installment Duration <code>*</code></label>--}}
{{--                    <input type="text" class="form-control" id="installment_duration" name="installment_duration" placeholder="EX: 4 months" required>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="installment_amount">Installment Amount <code>*</code></label>--}}
{{--                    <input type="text" class="form-control" id="installment_amount" name="installment_amount" placeholder="EX: 4000 tk" required>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="booking_amount">Booking Amount <code>*</code></label>--}}
{{--                    <input type="text" class="form-control" id="booking_amount" name="booking_amount" placeholder="Ex: 10000 tk" required>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>

    </form>
@endsection
