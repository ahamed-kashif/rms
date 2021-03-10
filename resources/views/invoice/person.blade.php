@extends('layouts.invoice')
@section('invoice-css')
    @include('extras.select2-css')
@endsection
@section('title')
    INVOICE {{$invoice->invoice_no}}
@endsection
@section('subtitle')
    ADD Person
@endsection
@section('content')
    <div class="p-5">
        <form action="{{route('invoice.person.update')}}" method="post" id="contractor_form">
            @csrf
            <button type="button" id="contractor_btn" onclick="show_contractor()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Contractor</button>
            <div class="form-group contractor">
                @if(count($contractors) > 0)
                    <label for="contractor_id" class="control-label">Select a Contractor...</label>
                    <select class="form-control select2" name="contractor_id" id="contractor_id">
                        <option>......</option>
                        @foreach($contractors as $contractor)
                            <option value="{{$contractor->id}}">{{$contractor->name}}</option>
                        @endforeach
                    </select>
                @else
                    <span>There is <code>no contractor</code> added to project. Add <a href="{{route('project.contractor.add',$invoice->project_id)}}">new contractor</a>.</span>
                @endif

            </div>
        </form>
        <form action="{{route('invoice.person.update')}}" method="post" id="supplier_form">
            @csrf
            {{--            <input type="hidden" name="is_project" value="0" />--}}
            <button type="button" id="supplier_btn" onclick="show_supplier()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Supplier</button>
            <div class="form-group supplier">
                @if(count($suppliers) > 0)
                    <label for="supplier_id" class="control-label">Select an Supplier Project...</label>
                    <select class="form-control select2" name="supplier_id" id="supplier_id">
                        <option>......</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                @else
                    <span>There is <code>no supplier</code> added to project. Add <a href="{{route('project.supplier.add',$invoice->project_id)}}">new supplier</a>.</span>
                @endif
            </div>
        </form>
        <form action="{{route('invoice.person.update')}}" method="post" id="engineer_form">
            @csrf
            {{--            <input type="hidden" name="is_project" value="0" />--}}
            <button type="button" id="engineer_btn" onclick="show_engineer()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Engineer</button>
            <div class="form-group engineer">
                @if(count($engineers) > 0)
                    <label for="project_id" class="control-label">Select an Engineer Project...</label>
                    <select class="form-control select2" name="engineer_id" id="engineer_id">
                        <option>......</option>
                        @foreach($engineers as $engineer)
                            <option value="{{$engineer->id}}">{{$engineer->name}}</option>
                        @endforeach
                    </select>
                @else
                    <span>There is <code>no engineer</code> added to project. Add <a href="{{route('project.engineer.add',$invoice->project_id)}}">new engineer</a>.</span>
                @endif
            </div>
        </form>
        <form action="{{route('invoice.person.update')}}" method="post" id="customer_form">
            @csrf
            {{--            <input type="hidden" name="is_project" value="0" />--}}
            <button type="button" id="customer_btn" onclick="show_customer()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Customer</button>
            <div class="form-group customer">
                @if(count($customers) > 0)
                    <label for="customer_id" class="control-label">Select an Customer Project...</label>
                    <select class="form-control select2" name="customer_id" id="customer_id">
                        <option>......</option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->full_name}}</option>
                        @endforeach
                    </select>
                @else
                    <span>There is <code>no customer</code> added to project. Add <a href="{{route('customer.create')}}">new customer</a>.</span>
                @endif
            </div>
        </form>
        <form action="{{route('invoice.person.update')}}" method="post" id="investor_form">
            @csrf
            {{--            <input type="hidden" name="is_project" value="0" />--}}
            <button type="button" id="investor_btn" onclick="show_investor()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Investor</button>
            <div class="form-group investors">
                @if(count($investors) > 0)
                    <label for="investor_id" class="control-label">Select an Investor Project...</label>
                    <select class="form-control select2" name="investor_id" id="investor_id">
                        <option>......</option>
                        @foreach($investors as $investor)
                            <option value="{{$investor->id}}">{{$investor->name}}</option>
                        @endforeach
                    </select>
                @else
                    <span>There is <code>no supplier</code> added to project. Add <a href="{{route('project.investor.add',$invoice->project_id)}}">new supplier</a>.</span>
                @endif
            </div>
        </form>
        <form action="{{route('invoice.person.update')}}" method="post" id="other_form">
            @csrf
            <input type="hidden" name="is_other" value="1" />
            <button type="button" id="other_btn" onclick="show_other()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Office/Other</button>
            <div class="form-group other">
                <label for="person_name">Person Name</label>
                <input type="text" class="form-control" placeholder="Enter Person Name.." name="person_name" id="person_name">
                <label for="person_phone">Phone</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number.." name="phone" id="person_phone">
                <input type="submit" class="btn btn-sm btn-outline-primary mt-2" value="next">
            </div>
        </form>
    </div>
@endsection
@section('footer')
    Select A Person
@endsection
@section('invoice-js')
    @include('extras.select2-js')
    @include('extras.advance-form-js')
    <script>
        let toggle = false;
        let contractor  = $('#contractor_form')
        let conBtn = $('#contractor_btn')
        let supplier = $('#supplier_form')
        let supBtn = $('#supplier_btn')
        let engineer = $('#engineer_form')
        let engBtn = $('#engineer_btn')
        let investor = $('#investor_form')
        let invBtn = $('#investor_btn')
        let other = $('#other_form')
        let othBtn = $('#other_btn')
        let customer = $('#customer_form')
        let cusBtn = $('#customer_btn')
        $(document).ready(function () {
            $('.contractor').hide();
            $('.engineer').hide();
            $('.supplier').hide();
            $('.customer').hide();
            $('.investors').hide();
            $('.other').hide();

            $('.contractor').on('change', function () {
                contractor.submit();
            });
            $('.supplier').on('change', function () {
                supplier.submit();
            });
            $('.engineer').on('change', function () {
                engineer.submit();
            });
            $('.customer').on('change', function () {
                customer.submit();
            });
            $('.investors').on('change', function () {
                investor.submit();
            });
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
        function show_engineer() {
            contractor.hide();
            engineer.show();
            $('.engineer').show();
            supplier.hide();
            customer.hide();
            investor.hide();
            other.hide();
        }
        function show_supplier() {
            contractor.hide();
            engineer.hide();
            supplier.show();
            $('.supplier').show();
            customer.hide();
            investor.hide();
            other.hide();
        }
        function show_customer() {
            contractor.hide();
            engineer.hide();
            supplier.hide();
            customer.show();
            $('.customer').show();
            investor.hide();
            other.hide();
        }
        function show_investor() {
            contractor.hide();
            engineer.hide();
            supplier.hide();
            customer.hide();
            investor.show();
            $('.investors').show();
            other.hide();
        }
        function show_other() {
            contractor.hide();
            engineer.hide();
            supplier.hide();
            customer.hide();
            investor.hide();
            other.show();
            $('.other').show();
        }
    </script>
@endsection
