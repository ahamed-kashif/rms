@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <h3 class="card-title">
            {{$flat->full_name}}

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('flat.destroy',$flat->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('flat.edit',$flat->id)}}">
                            <i class="fa fa-edit"></i>
                            <span class="text-alias"> Edit</span></a>
                        <button class="btn btn-danger w-xs" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                            <i class="fas fa-trash-alt"></i>
                            <span class="text-alias"> Delete</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <ol class="list-unstyled">
                <li>
                    <b>Flat Title</b><p><a href="tel:{{$flat->flat_title}}">{{$flat->flat_title}}</a></p>
                </li>
                <li>
                    <b>Flat Number</b><p><a href="email:{{$flat->flat_number}}">{{$flat->flat_number}}</a></p>
                </li>
                <li>
                    <b>Flat Balance</b><p>{{$flat->flat_balance}}</p>
                </li>

            </ol>
        </div>
        <div class="col-md-7 col-lg-7 border-pink">
            <div class="align-content-end">
                <h5>Assigned Projects</h5>
                <table class="table table-bordered align-content-center">
                    <thead>
                    <tr>
                        <th class="title">Active<small>(n)</small></th>
                        <th>Project</th>
                        <th>Product</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="badge badge-pill badge-success text-light font-size-15 p-2">active</span> </td>
                        <td>Demo</td>
                        <td>Demo</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>nill</td>
                        <td>nill</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>nill</td>
                        <td>nill</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

