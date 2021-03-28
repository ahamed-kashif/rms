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
            <p class="card-title-desc">List of flats showing below. We have
                <code> total {{$flats->count()}} flats</code> out of which <code>{{$flats->count()}} flats</code>  are <code>active</code>.
            </p>
        </div>

    </div>

    <hr>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Title</th>
            <th>Number</th>
            <th>Booking Amount</th>
            <th>Installment Amount</th>

            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($flats as $flats)
            <tr>
                <td><a href="{{route('flat.show',$flats->id)}}">{{$flats->flat_title}}</a></td>
                <td>{{$flats->flat_number}}</td>
                <td>{{$flats->booking_amount}}</td>
                <td>{{$flats->installment_amount}}</td>
                <td>
                    <div class="dropdown align-content-center">
                        <button class="btn" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench font-size-15 text-primary"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">
                            <a class="dropdown-item" href="{{route('flat.edit',$flats->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>
                            <form action="{{route('flat.destroy',$flats->id)}}" method="POST">
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
