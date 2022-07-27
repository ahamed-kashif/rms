<?php
namespace App\Http\Controllers\Libs;


use App\Models\Customer;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        if(auth()->user()->can('index customer')){
            $customers = Customer::all();

            $title = 'Customers';
            $breacrumbs['Contacts'] = "#";
            $breacrumbs['Customer'] = 'javaScript:void();';


            return view('libs.customer.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breacrumbs,
                'customers' => $customers
            ]);
        }else{
            return redirect()->route('home')->with('error','unauthorized access!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {

        if(auth()->user()->can('create customer')){
            $customer = Customer::all();
            $project = Project::isActive()->get();
            $title = 'Add Customer';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['customers'] = route('customer.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.customer.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'projects' => $project
            ]);
        }else{
            return redirect('home')->with('error','Unauthorized Access');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */

    public function store(Request $request)
    {


        $request->validate([
            'full_name' => 'required',
            'father_or_husband_name' => 'nullable',
            'mother_name' => 'nullable',
            'occupation' => 'nullable',
            'date_of_birth'=>'nullable',
            'nationality'=>'nullable',
            'phone_number' => 'required',
            'email' => 'email|nullable',
            'nid' => 'nullable',
            'nominee_name' => 'nullable',
            'present_address' => 'nullable|string',
            'permanent_address' => 'nullable|string',
        ]);

        try{
            $customer = Customer::create($request->except(['_token','_method','flat_amount','flat_title']))->flats()->create([
                'flat_amount' => $request->flat_amount,
                'project_id' => $request->project_id,
                'flat_title' => $request->flat_title
            ]);

            return redirect()->route('customer.show',$customer->id)->with([
                'success' => 'Customer created'
            ]);


        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getmessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function show($id)
    {
        if(auth()->user()->can('show customer')){
            if(is_numeric($id)){
                $customer = Customer::find($id);
                $title = 'Show Customer';
                $breadcrumbs['contact'] = "#";
                $breadcrumbs['customers'] = route('customer.index');
                $breadcrumbs[$customer->full_name] = 'javaScript:void();';
                if($customer == null){
                    return redirect()->back()->with('error','Customer not exists!');
                }
                if ($customer->flats()->count() >= 1){
                    $accounts = $this->customer_account($customer->id);
                }else{
                    return redirect()->route('flat.create',$id)->with('error','Add Flat First');
                }
                return view('libs.customer.show')->with([
                    'customer' => $customer,
                    'title' => $title,
                    'breadcrumbs'=> $breadcrumbs,
                    'accounts' => $accounts,
                    'project' => $customer,
                    'upload_url' => route('resource.create.customer',$customer->id)
                ]);
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        if(auth()->user()->can('edit customer')){

            $title = 'Edit '.$customer->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['customers'] = route('customer.index');
            $breadcrumbs[$customer->full_name] = route('customer.show',$customer->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $customer = Customer::find($id);
                if($customer == null){
                    return redirect()->back()->with('error','customer not exists!');
                }
                return view('libs.customer.edit')->with([
                    'customer' => $customer,
                    'title' => $title,
                    'breadcrumbs' => $breadcrumbs,
                    'projects' => Project::isActive()->get()
                ]);
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        if(auth()->user()->can('update customer')){

            $title = 'Update Customer';
            $breadcrumbs['libs'] = "#";
            $breadcrumbs['customers'] = route('customer.index');

            if(is_numeric($id)){
                try{
                    $customer = Customer::findOrFail($id);
                    $customer->update($request->except(['_token','_method']));
                    $customer->flats()->update($request->only(['flat_title','flat_amount','project_id']));
                    return redirect()->back()->with('success','successfully updated');


                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete customer')){
            try{
                Customer::findOrFail($id)->delete();
                return redirect()->route('customer.index')->with('success','successfully deleted!');
            }catch (\Exception $e){
                return redirect()->back()->withErrors($e->getmessage());
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }

    public function print_customer($id){
        $customer = Customer::find($id);
        $title = 'Print '.$customer->name;
        $breadcrumbs['customers'] = route('customer.index');
        $breadcrumbs[$customer->name] = route('customer.show',$customer->id);
        $breadcrumbs['print'] = 'javaScript:void();';
        return view('libs.customer.print')->with([
            'customer' => $customer,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    /**
     * Accounts calculation of a project.
     *
     * @param  int  $id
     * @return mixed
     */
    public function customer_account($id)
    {
        $customer = Customer::find($id);
        //dd($customer->flats()->get());
        $invoices = $customer->Invoice()->get();
        $balances = [];
        $balance = $customer->flats()->first()->flat_amount;
        if(count($invoices) == 0){
            return 0;
        }
        foreach($invoices as $invoice) {
            if ($invoice->is_checkin) {
                $balance = $balance - $invoice->amount;
                $balances[$invoice->id] = $balance;
            } else {
                $balance = $balance + $invoice->amount;
                $balances[$invoice->id] = $balance;
            }
        }
        $account['invoices'] = $invoices;
        $account['balance'] = $balances;

        return $account;
    }
}
