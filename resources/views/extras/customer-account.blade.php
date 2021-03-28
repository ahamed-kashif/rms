<h4 class="text-center">Customer Accounts</h4>
<hr>
<table id="customer_account" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

    <thead class="bg-secondary text-light">
    <tr>
        <th>Date</th>
        <th>Invoice NO.</th>
        <th>Received</th>
        <th>Expense</th>
        <th>Balance</th>
        <th>Person</th>
        <th>Payment Method</th>
        <th>Purpose</th>
    </tr>

    </thead>
    <tbody>

    @if($customerBalance != 0)
        {{--            @php--}}
        {{--            dd($customerBalance);--}}
        {{--            @endphp--}}
        @foreach($project->customers()->get() as $customer)
            @foreach($customerBalance['invoices'][$customer->id] as $invoice)
                <tr>
                    <td>{{date_format(date_create($invoice->created_at),'d-m-Y')}}</td>
                    <td><a href="{{route('invoice.show',$invoice->id)}}">{{$invoice->invoice_no}}</a></td>
                    <td>{{$invoice->is_checkin ? $invoice->amount : '-'}}</td>
                    <td>{{$invoice->is_checkin ?  '-' : $invoice->amount}}</td>
                    <td>{{$customerBalance['balance'][$customer->id][$invoice->id]}}</td>
                    <td>{{$invoice->is_office_expense == 1 ? $invoice->person_name : ($invoice->person->name == null ? $invoice->person->full_name : $invoice->person->name)}}</td>
                    <td>{{$invoice->PaymentMethod->title}}</td>
                    <td>{{$invoice->description}}</td>
                </tr>
            @endforeach
        @endforeach
    @endif
    </tbody>
</table>

                                        {{--/***** No Need *****/--}}
