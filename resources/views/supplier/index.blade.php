@extends('layouts.page')

@section('page-title')
Index
@endsection
@section('content')
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
                   <a href=" ">
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
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
