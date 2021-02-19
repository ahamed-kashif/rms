<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Contractor;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\Investor;
use App\Models\Invoice;
use App\Models\PaymentMethod;
use App\Models\Project;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $accounts = [];
        //dd($invoices->first()->balance);

        Artisan::call('account:generate');


        $contractors = Contractor::all();
        $projects = Project::where('is_investor_project',0)->pluck('id')->toArray();
        $payment_methods = PaymentMethod::all();

        if($request->has('start') && $request->has('end')){
            $invoices = Invoice::whereBetween('created_at',[$request->input('start'),$request->input('end')])->whereIn('project_id',$projects)->orderBy('created_at','desc')->get();
            //dd($invoices->first()->created_at);
        }else{
            $invoices = Invoice::with('balance')->whereIn('project_id',$projects)->orderBy('created_at','desc')->get();
        }
        $balances = Balance::with('invoices')->get();
        $title = 'Accounts';
        $breadcrumbs['accounts'] = '#';
        return view('accounts.index')->with([
            'invoices' => $invoices,
            'amount' => 0,
            'received' =>0,
            'expense' => 0,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'balances' => $balances,
            'contractors' => $contractors,
            'payment_methods' => $payment_methods,
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
