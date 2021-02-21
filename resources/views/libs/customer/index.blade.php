@extends('layouts.page')
@section('page-css')
    @include('extras.datatable-css')
@endsection

@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row p-2">
        <div class="col-sm-10 col-lg-10 col-md-10">
            <p class="card-title-desc">List of customers showing below. We have
                <code> total {{$customers->count()}} customers</code> out of which <code>{{$customers->count()}} customers</code>  are <code>active</code>.
            </p>
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2">
            <div class="row">
                <a href="{{route('customer.create')}}" class="ml-auto btn btn-secondary px-4" title="Add customers"><i class="fas fa-user-plus font-size-16"></i></a>
            </div>
        </div>
    </div>

    <hr>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td><a href="{{route('customer.show',$customer->id)}}">{{$customer->full_name}}</a></td>
                <td>{{$customer->phone_number}}</td>
                <td>{{$customer->email}}</td>
                <td>
                    <div class="dropdown align-content-center">
                        <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">
                            <a class="dropdown-item" href="{{route('customer.edit',$customer->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>
                            <form action="{{route('customer.destroy',$customer->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="dropdown-item text-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                                    <i class="fas fa-trash-alt"></i>
                                    <span class="text-alias"> Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('page-js')
    @include('extras.datatable-js')
@endsection
