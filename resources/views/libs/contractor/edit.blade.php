@extends('layouts.page')
@section('page-title')
    Edit Investor
@endsection
@section('content')
    <div class="card-body">

        <form action="{{route('investor.update',$investor->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$investor->name}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="{{$investor->phone}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{$investor->email}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{$investor->address}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" id="nid" placeholder="NID" name="nid" value="{{$investor->nid}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" {{$investor->is_active ? 'checked' : ''}}>
                        <label class="form-check-label" for="is_active">
                            Active
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>

        </form>
    </div>



@endsection
