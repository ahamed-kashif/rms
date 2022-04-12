@extends('layouts.invoice')
@section('invoice-css')
    @include('extras.select2-css')
@endsection
@section('title')
    INVOICE {{$invoice->invoice_no}}
@endsection
@section('subtitle')
    ADD Material
@endsection
@section('content')
    <div class="p-5">
        <form action="{{route('invoice.material.update',$invoice->id)}}" method="post" id="contractor_form">
            @csrf
            <button type="button" id="contractor_btn" onclick="show_contractor()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Material</button>
            <div class="form-group contractor">
                <a href="{{route('material.create')}}">Add new material</a><br>
                @if(count($materials) > 0)
                    <label for="contractor_id" class="control-label">Select a material...</label>
                    <select class="form-control select2" name="material_id" id="contractor_id">
                        <option>......</option>
                        @foreach($materials as $m)
                            <option value="{{$m->id}}">{{$m->title}}</option>
                        @endforeach
                    </select>
                    <label for="qty">Qty</label>
                    <input name="qty" value="0" type="number" class="form-control">
                    <button type="submit" class="btn btn-sm btn-primary">submit</button>
                @else
                    <span>There is <code>no contractor</code> added to project. Add <a href="{{route('project.contractor.add',$invoice->project_id)}}">new contractor</a>.</span>
                @endif

            </div>
        </form>
    </div>
@endsection
@section('footer')
    Material
@endsection
@section('invoice-js')
    @include('extras.select2-js')
    @include('extras.advance-form-js')
    <script>
        let toggle = false;
        let contractor  = $('#contractor_form')
        $(document).ready(function () {
            $('.contractor').hide();
        });

        function show_contractor() {
            contractor.show();
            $('.contractor').show();
            engineer.hide();
            supplier.hide();
            customer.hide();
            investor.hide();
            other.hide();
        }
    </script>
@endsection
