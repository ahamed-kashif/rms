@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{isset($customer) ? $customer->name : ''}}</h4>

    <form action="{{route('customer.update', $customer->id)}}" method="post">
        @csrf
        @method('put')
        @csrf
        <input type="hidden" id="project_id" name="project_id" value="{{$customer->project_id}}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="full_name">Full Name<code>*</code></label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $customer->full_name }}" required>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="father_or_husband_name">Father/Husband Name</label>
                    <input type="text" class="form-control" id="father_or_husband_name" name="father_or_husband_name" value="{{ $customer->father_or_husband_name }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="mother_name">Mother Name</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ $customer->mother_name }}">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $customer->occupation }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $customer->date_of_birth }}" required>
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $customer->nationality }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone <code>*</code></label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone_number }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" id="nid" name="nid" value="{{ $customer->nid }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nominee_name">Nominee Name <code>*</code></label>
                    <input type="text" class="form-control" id="nominee_name" name="nominee_name" value="{{ $customer->nominee_name }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="present_address">Present Address <code>*</code></label>
                    <input type="text" class="form-control" id="present_address" name="present_address" value="{{ $customer->present_address }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="permanent_address">Permanent Address <code>*</code></label>
                    <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="{{ $customer->permanent_address }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="reference_person_name">Reference Person Name <code>*</code></label>
                    <input type="text" class="form-control" id="reference_person_name" name="reference_person_name" value="{{ $customer->reference_person_name }}" required>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="project_id">Select Project</label>--}}
{{--            <select class="select2-single form-control" name="project_id" id="project_id" required>--}}
{{--                <option>Select any project</option>--}}
{{--                @foreach($projects as $project)--}}
{{--                    <option value="{{$project->id}}">{{$project->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}



        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>
    </form>
@endsection
