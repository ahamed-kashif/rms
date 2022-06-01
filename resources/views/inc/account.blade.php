<h4 class="text-center">Accounts</h4>
<hr>
<table id="account" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

    <thead class="bg-secondary text-light">
    <tr>
        <th>Date</th>
        <th>Invoice NO.</th>
        <th>Received</th>
        <th>Expense</th>
{{--        <th>Balance</th>--}}
        <th>Person</th>
        <th>Payment Method</th>
        <th>Purpose</th>
    </tr>

    </thead>
    <tbody>

    @if($accounts != 0)
        @foreach($accounts['invoices'] as $invoice)
            <tr>
                <td>{{date_format(date_create($invoice->created_at),'d-m-Y')}}</td>
                <td><a href="{{route('invoice.show',$invoice->id)}}">{{$invoice->invoice_no}}</a></td>
                <td>{{$invoice->is_checkin ? number_format($invoice->amount) : '-'}}</td>
                <td>{{$invoice->is_checkin ?  '-' : number_format($invoice->amount)}}</td>
{{--                <td>{{$accounts['balance'][$invoice->id]}}</td>--}}
                <td>{{$invoice->person_name}}</td>
                <td>{{$invoice->PaymentMethod->title}}</td>
                <td>{{$invoice->description}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

