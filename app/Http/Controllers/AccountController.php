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
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $projects[] = 0;
        $payment_methods = PaymentMethod::all();

        if($request->has('start') && $request->has('end')){
            $invoices = Invoice::where('is_checked',1)->whereBetween('created_at',[$request->input('start'),$request->input('end')])->whereIn('project_id',$projects)->orderBy('created_at','desc')->get();
            //dd($invoices->first()->created_at);
        }else{
            $invoices = Invoice::whereIn('project_id',$projects)->where('is_checked',1)->orderBy('created_at','desc')->get();
        }
//        dd($invoices);
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
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function investors_account_list(Request $request)
    {
        $projects = Project::where('is_investor_project',1)->get();
        $title = 'Investor Project Accounts';
        $breadcrumbs['Investor projects'] = route('project.investor.list');
        $user = Auth::user();
        if($user->can('index project')){
            return view('accounts.investor_list')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'projects' => $projects
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function investor_account_show($id, Request $request)
    {
        $project = Project::find($id);
        $title = $project->name.' Accounts';
        $breadcrumbs['investor projects accounts'] = route('project.investor.list');
        $user = Auth::user();
        $accounts = $this->project_account($id,$request->start,$request->end);
        if($user->can('index project')){
            return view('accounts.investor')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'accounts' => $accounts
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    /**
     * Accounts calculation of a project.
     *
     * @param int $id
     * @param null $s_date
     * @param null $e_date
     * @return mixed
     */
    public function project_account($id, $s_date = null, $e_date = null)
    {
        //$project = Project::find($id);
        if($s_date != null && $e_date != null){
            $invoices = Invoice::whereBetween('created_at',[$s_date,$e_date])->where('project_id',$id)->get();
        }else{
            $invoices = Project::find($id)->invoices()->get();
        }
        $balances = [];
        $balance = 0;
        if(count($invoices) == 0){
            return 0;
        }
        foreach($invoices as $invoice) {
            if ($invoice->is_checkin) {
                $balance = $balance + $invoice->amount;
                $balances[$invoice->id] = $balance;
            } else {
                $balance = $balance - $invoice->amount;
                $balances[$invoice->id] = $balance;
            }
        }
        $account['invoices'] = $invoices;
        $account['balance'] = $balances;

        return $account;
    }
}
