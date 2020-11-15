@extends('layouts.page')
@section('page-title')
    Create Contractor
@endsection


@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <form action="{{route('contractor.store')}}" method="post" class="w3-container">
        @csrf
        <p>
            <label>Name</label>
            <input name="name" id="name" class="w3-input" type="text"></p>
        <p>
            <label>Phone</label>
            <input name="phone" id="phone" class="w3-input" type="text"></p>
        <p>
            <label>Email</label>
            <input name="email" id="email" class="w3-input" type="text"></p>
        <p>
            <label>Address</label>
            <input name="address" id="address" class="w3-input" type="text"></p>
        <p>
            <label>NID</label>
            <input name="nid" id="nid" class="w3-input" type="text"></p>
       <p>
            <label>Material</label>
            <input name="material" id="material" class="w3-input" type="text"></p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active">
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
@endsection
