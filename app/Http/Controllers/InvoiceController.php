<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Helpers\InvoiceSession;
use App\Models\Contractor;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\Material;
use App\Models\Supplier;
use App\Models\Investor;
use App\Models\Invoice;
use App\Models\PaymentMethod;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the invoices.
     *
     * @return mixed
     */
    public function index()
    {
        if (Auth::user()->can('index invoice')){
            $title = 'Invoices';
            $breadcrumbs['invoices'] = '#';
            $invoices = Invoice::all()->sortByDesc('created_at');
            $relations = [
                'App\Models\Contractor' => 'contractor',
                'App\Models\Supplier' => 'supplier',
                'App\Models\Engineer' => 'engineer',
                'App\Models\Investor' => 'investor',
                'App\Models\Customer' => 'customer',
                'App\Employee' => 'employee'
                ];
            return view('invoice.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'invoices' => $invoices,
                'relations' => $relations
            ]);
        }
        return redirect()->route('home')->with(['error','Unauthorized Access!']);
    }
    /**
     * show check in and out form
     *
     * @return mixed
     */
    public function create()
    {
        $user = Auth::user();
        $invoice = Invoice::orderBy('updated_at','desc')->first();
        if(!empty($invoice)){
            if($invoice->amount == null){
                return redirect()->route('invoice.amount.add',$invoice->id);
            }
        }
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                session()->forget('invoice');
            }
            return view('invoice.create');
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }
    /**
     * store check in or out and state information in session
     *
     * @return mixed
     */
    public function initial_stage(Request $request){
        $user = Auth::user();
        if (!$user->can('create invoice')){
            return redirect()->route('home')->with(['error', 'Unauthorized Access!']);
        }
        $latestInvoice = Invoice::latest()->first();
        $serial =0;
        $invoice = new Invoice;
        $serial = Invoice::orderBy('created_at','desc')->first()->serial;
        $serial++;
        $invoice->invoice_no = (date('Ymd')).'-'.sprintf('%03d', $serial);
        $invoice->serial = $serial;
        $invoice->is_checkin = $request->input('is_checkin');
        $invoice->created_by = Auth::user()->name;
        if(session()->has('invoice')){
            session()->forget('invoice');
        }
        $record['invoice'] = $invoice;
        $record['state'] = 'initial';
        session()->put('invoice', $record);
        return redirect()->route('invoice.payment.method');

    }

    /**
     * show payment method form
     *
     * @return mixed
     */
    public function payment_form(){
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                $record = session()->get('invoice');
                if($record['invoice']->is_checkin != null && $record['state'] == 'initial'){
                    $paymentMethods = PaymentMethod::all();
                    return view('invoice.payment_method')->with([
                        'invoice' => $record['invoice'],
                        'paymentMethods' => $paymentMethods
                    ]);
                }
                return redirect()->route('invoice.create')->with(['error','Create an Invoice first']);
            }
            return redirect()->route('invoice.create')->with(['error','Please Checkin or Checkout']);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }
    /**
     * store payment method information in session
     *
     * @return mixed
     */
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
        $record = session()->get('invoice');
        session()->forget('invoice');
        $record['invoice']->payment_method_id = $request->payment_method_id;
        $record['state'] = 'payment';
        session()->put('invoice', $record);

        return redirect()->route('invoice.account-head.create');
    }

    /**
     * show Account Head form
     *
     * @return mixed
     */
    public function account_head(){
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                $record = session()->get('invoice');
                $projects = Project::isActive()->where('is_investor_project',0)->orderBy('updated_at')->get();
                $otherProjects = Project::isActive()->where('is_investor_project',1)->orderBy('updated_at')->get();
                //dd($projects);
                if($record['state'] == 'payment'){
                    $title = 'Invoice NO:   '.session()->get('invoice')['invoice']->invoice_no;
                    $breadcrumbs['invoices'] = '#';
                    $breadcrumbs['add invoice'] = '#';
                    return view('invoice.account_head')->with([
                        'title' => $title,
                        'breadcrumbs' => $breadcrumbs,
                        'invoice' => $record['invoice'],
                        'projects' => $projects,
                        'otherProjects' => $otherProjects
                    ]);
                }
                return redirect()->route('invoice.create')->with('error','Create an Invoice First');
            }
            return redirect()->route('invoice.create')->with('error','Create an Invoice First');
        }
        return redirect()->route('home')->with('error','Create an Invoice First');
    }

    /**
     * store account head information in session
     *
     * @return mixed
     */
    public function account_head_update(Request $request){
//        dd('hello');
        $request->validate([
            'project_id' => 'required'
        ]);
        if(session()->has('invoice')){
            $record = session()->get('invoice');
            if(session()->forget('invoice') == null){
                try{
                    $project = Project::findorfail($request->input('project_id'));
                }catch (\Exception $e){
                    return redirect()->route('invoice.create')->with('error',$e->getMessage());
                }
                $record['invoice']->project_id = $request->input('project_id');
                $record['invoice']->project_name = $project->name;
                $record['state'] = 'acchead';
                session()->put('invoice',$record);
                return redirect()->route('invoice.person.add');
            }else{
                return redirect()->back()->withErrors('something went wrong!');
            }
        }
        return redirect()->route('invoice.create')->with('error','Invoice is null!');
    }

    /**
     * show Person form
     *
     * @return mixed
     */
    public function add_person(){
        $user = Auth::user();
        if($user->can('create invoice')){
            if(session()->has('invoice')){
                $record = session()->get('invoice');
                $invoice = $record['invoice'];
                $project = Project::find($invoice->project_id);
                $contractors = $project->contractors()->get();
                $suppliers = $project->suppliers()->get();
                $engineers = $project->engineers()->get();
                $customers = Customer::has('flats')->where('project_id',$invoice->project_id)->get();
                $investors = $project->investors()->get();
                if($record['invoice']->is_checkin != null && $record['invoice']->payment_method_id != null && $record['invoice']->project_id != null && $record['state'] == 'acchead'){
                    $title = 'Invoice NO:   '.session()->get('invoice')['invoice']->invoice_no;
                    $breadcrumbs['invoices'] = '#';
                    $breadcrumbs['add invoice'] = '#';
                    return view('invoice.person')->with([
                        'title' => $title,
                        'breadcrumbs' => $breadcrumbs,
                        'invoice' => $record['invoice'],
                        'contractors' => $contractors,
                        'suppliers' => $suppliers,
                        'engineers' => $engineers,
                        'customers' => $customers,
                        'investors' => $investors,
                        'project' => $project
                    ]);
                }
                return redirect()->route('invoice.create')->with('error','Create an Invoice First');
            }
            return redirect()->route('invoice.create')->with('error','Create an Invoice First');
        }
        return redirect()->route('home')->with('error','Create an Invoice First');
    }
    /**
     * store person information in session
     * @param Request $request
     * @return mixed
     */
    public function person_update(Request $request){
        $request->validate([
           'person_name' => 'required_with:other',
           'phone' => 'required_with:other',
        ]);
        if(session()->has('invoice')){
            $record = session()->get('invoice');
            $invoice = $record['invoice'];
            try{
                if($request->has('contractor_id')){
                    $contractor = Contractor::findOrFail($request->input('contractor_id'));
                    $invoice->person_name = $contractor->name;
                    $invoice->person_phone = $contractor->phone_number;
                    $contractor->Invoice()->save($invoice);
                    session()->forget('invoice');
                    return redirect()->route('invoice.amount.add',$invoice->id);
                }elseif($request->has('engineer_id')){
                    $engineer = Engineer::findOrFail($request->input('engineer_id'));
                    $invoice->person_name = $engineer->name;
                    $invoice->person_phone = $engineer->phone_number;
                    $engineer->Invoice()->save($invoice);
                    session()->forget('invoice');
                    return redirect()->route('invoice.amount.add',$invoice->id);
                }
                elseif($request->has('supplier_id')){
                    $supplier = Supplier::findOrFail($request->input('supplier_id'));
                    $invoice->person_name = $supplier->name;
                    $invoice->person_phone = $supplier->phone_number;
                    $supplier->Invoice()->save($invoice);
                    session()->forget('invoice');
                    return redirect()->route('invoice.material.add',$invoice->id);
                }
                elseif($request->has('customer_id')){
                    $customer = Customer::findOrFail($request->input('customer_id'));
                    $invoice->person_name = $customer->full_name;
                    $invoice->person_phone = $customer->phone_number;
                    $customer->Invoice()->save($invoice);
                    session()->forget('invoice');
                    return redirect()->route('invoice.amount.add',$invoice->id);
                }
                elseif($request->has('investor_id')){
                    $investor = Investor::findOrFail($request->input('investor_id'));
                    $invoice->person_name = $investor->name;
                    $invoice->person_phone = $investor->phone_number;
                    $investor->Invoice()->save($invoice);
                    session()->forget('invoice');
                    return redirect()->route('invoice.amount.add',$invoice->id);
                }
                elseif($request->has('is_other')){
                    $invoice->is_office_expense = 1;
                    $invoice->person_name = $request->input('person_name');
                    $invoice->person_phone = $request->input('phone');
                    $invoice->save();
                    session()->forget('invoice');
                    return redirect()->route('invoice.amount.add',$invoice->id);
                }

            }catch (\Exception $e){
                return redirect()->route('invoice.create')->with('error',$e->getMessage());
            }

        }

    }
    public function add_material($id){
        $invoice = Invoice::find($id);
        $title = 'Invoice No.   '.$invoice->invoice_no;
        $breadcrumbs['invoices'] = "#";
        $breadcrumbs[$invoice->invoice_no] = "#";
        $breadcrumbs['Add Material'] = '#';
        return view('invoice.material')->with([
            'invoice' => $invoice,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'materials' => Material::all()
        ]);
    }
    public function material_update(Request $request, $id){
        $request->validate([
            'material_id' => 'required|numeric',
            'qty' => 'required|numeric'
        ]);
        $invoice = Invoice::find($id);
        $invoice->materials()->attach(Material::findOrFail($request->material_id),['qty' => $request->qty]);
        return redirect()->route('invoice.amount.add',$invoice->id);
    }
    public function add_amount($id){
        $invoice = Invoice::find($id);
        if($invoice->amount != null){
            return redirect()->route('invoice.create');
        }
        $title = 'Invoice No.   '.$invoice->invoice_no;
        $breadcrumbs['invoices'] = "#";
        $breadcrumbs[$invoice->invoice_no] = "#";
        $breadcrumbs['add amount'] = '#';
        return view('invoice.add_amount')->with([
            'invoice' => $invoice,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function amount_update(Request $request, $id){
        $request->validate([
            'amount' => 'required|numeric'
        ]);
        $invoice = Invoice::find($id);
        //dd($invoice);
        $invoice->amount = $request->input('amount');
        $invoice->description = $request->input('description');
        $invoice->update();
        Artisan::call('account:generate');
        return redirect()->route('invoice.show', $invoice->id)->with('success','Invoice is successfully created...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function show($id){
        if (Auth::user()->can('show invoice')){
            $invoice = Invoice::find($id);
            $title = 'Invoice No.   '.$invoice->invoice_no;
            $breadcrumbs['invoices'] = "#";
            $breadcrumbs[$invoice->invoice_no] = "#";
            return view('invoice.show')->with([
                'invoice' => $invoice,
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        try{
            Invoice::findorfail($id)->delete();
        }catch(\Exception $e){
            return redirect()->route('invoice.index')->with('error',$e->getMessage());
        }
    }

    public function createSalary(){
        try{
            return view('invoice.salary')->with([
               'title' => 'Salary create',
               'breadcrumbs' => [
                   'Dashboard' => route('home'),
                   'Employees' => route('employee.index'),
               ],
               'employees' => Employee::all(),
               'pms' => PaymentMethod::all()
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
    public function updateSalary(Request $request){
        try{
            $request->validate([
                'employee_id' => 'required',
                'amount' => 'required'
            ]);
            $serial =0;
            if(Invoice::all()->count() > 0){
                $serial = Invoice::all()->count();
            }
            $serial++;
            Employee::findOrFail($request->employee_id)->Invoice()->create([
                'serial' => $serial,
                'amount' => $request->amount,
                'invoice_no' => (date('Ymd')).'-'.sprintf('%03d', $serial),
                'is_checkin' => 0,
                'project_id' => 0,
                'person_name' => Employee::findOrFail($request->employee_id)->name,
                'person_phone' => Employee::findOrFail($request->employee_id)->phone,
                'payment_method_id' => $request->payment_method_id,
                'created_by' => Auth::user()->name
            ]);
            Artisan::call('account:generate');
            return redirect()->route('account.index')->with([
                'success' => 'Invoice Created'
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
}
