<?php

namespace App\Http\Controllers;

use App\Helpers\InvoiceSession;
use App\Models\Invoice;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                session()->forget('invoice');
            }
            return view('invoice.create');
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    public function payment_form(){
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                $invoice = session()->get('invoice');
                if($invoice->is_checkin != null){
                    $paymentMethods = PaymentMethod::all();
                    return view('invoice.payment_method')->with([
                        'invoice' => $invoice,
                        'paymentMethods' => $paymentMethods
                    ]);
                }
                return redirect()->route('invoice.create')->with(['error','Create an Invoice first']);
            }
            return redirect()->route('invoice.create')->with(['error','Please Checkin or Checkout']);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    public function payment_update(Request $request){
        $user = Auth::user();
        if(!$user->can('create invoice')){
            return redirect()->route('home')->with(['error','Unauthorized Access!']);
        }
        if(!session()->has('invoice')){
            return redirect()->route('invoice.create')->with([
                'error', 'Create an Invoice First!'
            ]);
        }
        $invoice = session()->get('invoice');
        session()->forget('invoice');
        $invoice->payment_method_id = $request->payment_method_id;
        session()->put('invoice', $invoice);

        return redirect()->route('invoice.purpose.add');
    }
    public function add_purpose(){
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                $invoice = session()->get('invoice');
                if($invoice->is_checkin != null && $invoice->payment_method_id != null){
                    $title = 'Invoice NO:   '.session()->get('invoice')->invoice_no;
                    $breadcrumbs['invoices'] = '#';
                    $breadcrumbs['add invoice'] = '#';
                    return view('invoice.purpose')->with([
                        'title' => $title,
                        'breadcrumbs' => $breadcrumbs
                    ]);
                }
                return redirect()->route('invoice.create')->with('error','Create an Invoice First');
            }
            return redirect()->route('invoice.create')->with('error','Create an Invoice First');
        }
        return redirect()->route('home')->with('error','Create an Invoice First');
    }
    public function initial_stage(Request $request){
        $user = Auth::user();
        if (!$user->can('create invoice')){
            return redirect()->route('home')->with(['error', 'Unauthorized Access!']);
        }
        $latestInvoice = Invoice::latest()->first();
        $serial =0;
        $invoice = new Invoice;
        if(Invoice::all()->count() > 0){
            $serial = $latestInvoice->serial;
        }
        $serial++;
        $invoice->invoice_no = (date('Ymd')).'-'.sprintf('%03d', $serial);
        $invoice->is_checkin = $request->input('is_checkin');
        if(session()->has('invoice')){
            session()->forget('invoice');
        }
        session()->put('invoice', $invoice);
        return redirect()->route('invoice.payment.method');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
