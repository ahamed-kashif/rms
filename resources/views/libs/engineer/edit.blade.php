@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{isset($engineer) ? $engineer->name : ''}}</h4>

    <form action="{{route('engineer.update', $engineer->id)}}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name<code>*</code></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Ashikur Rahman" required value="{{(isset($engineer)? $engineer->name : '')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="optional" value="{{(isset($engineer)? $engineer->nid : '')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Contact Number<code>*</code></label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Ex: 01xxxxxxxxxx" required value="{{(isset($engineer)? $engineer->phone_number : '')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formrow-password-input">Email (optional)</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex: example@example.com (optional)" value="{{(isset($engineer)? $engineer->email : '')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" placeholder="optional">{{isset($engineer) ? $engineer->address : ''}}</textarea>
        </div>
        <div class="form-group">
            <label>If you want make active this constructor for projects, <code>check the button below</code>.</label>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"  name="is_active" id="is_active" {{(isset($engineer)? ($engineer->is_active ? 'checked' : '') : '')}}>
                <label class="custom-control-label" for="is_active">Active</label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>
    </form>
@endsection
