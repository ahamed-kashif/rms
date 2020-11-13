@extends('layouts.page')

@section('page-title')
Index
@endsection
@section('content')
    <a href="{{route('supplier.create')}}">Create</a>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>N_ID</th>
            <th>Material</th>
            <th>Status</th>
        </tr>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
               <td>
                   <a href="{{route('supplier.show',$supplier->id)}}">
                       {{($supplier->name)}}
                   </a>
               </td>
                <td>{{$supplier->phone}}</td>
                <td>{{$supplier->email}}</td>
                <td>{{$supplier->address}}</td>
                <td>{{$supplier->nid}}</td>
                <td>{{$supplier->material}}</td>
                <td>
                    {{$supplier->is_active ? 'active' : 'inactive'}}
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary"  type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton8">
                            <a class="dropdown-item" href="{{route('supplier.edit',$supplier->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> edit</span></a>
                            <form action="{{route('supplier.destroy',$supplier->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class="dropdown-item btn btn-danger-rgba" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                                    <i class="feather icon-trash-2 mr-2"></i>
                                    <span class="text-alias">Delete</span>
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
