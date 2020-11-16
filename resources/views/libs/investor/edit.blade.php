@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <h4 class="card-title mb-4">{{isset($investor) ? $investor->name : ''}}</h4>

    <form action="{{route('investor.update', $investor->id)}}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name<code>*</code></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Ashikur Rahman" required value="{{(isset($investor)? $investor->name : '')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="optional" value="{{(isset($investor)? $investor->nid : '')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Contact Number<code>*</code></label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Ex: 01xxxxxxxxxx" required value="{{(isset($investor)? $investor->phone_number : '')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formrow-password-input">Email (optional)</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex: example@example.com (optional)" value="{{(isset($investor)? $investor->email : '')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" placeholder="optional">{{isset($investor) ? $investor->address : ''}}</textarea>
        </div>
        <div class="form-group">
            <label>If you want make active this investor for projects, <code>check the button below</code>.</label>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"  name="is_active" id="is_active" {{(isset($investor)? ($investor->is_active ? 'checked' : '') : '')}}>
                <label class="custom-control-label" for="is_active">Active</label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
        </div>
    </form>
@endsection
