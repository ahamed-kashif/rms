<?php
namespace App\Http\Controllers\Libs;


use App\Models\Customer;
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
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(auth()->user()->can('create customer')){
            $customer = Customer::all();

            $title = 'Add Customer';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['customers'] = route('customer.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.customer.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }else{
            return redirect('home')->with('error','Unauthorized Access');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'phone_number' => 'required|max:20',
            'email' => 'email|unique:contractors',
            'nid' => 'max:30|nullable',
            'project_id' => 'unique:customers'

        ]);

        $customer = new Customer();

        $customer->name = $request->input('name');
        $customer->phone_number = $request->input('phone_number');
        $customer->email = $request->input('email');
        $customer->nid = $request->input('nid');
        $customer->address = $request->input('address');
        $customer->project_id = $request->input('project_id');


        try{
            $customer->save();

            return redirect()->back()->with('success','successfully stored');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getmessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        if(auth()->user()->can('show customer')){

            $title = 'Show Customer';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['customers'] = route('customer.index');
            $breadcrumbs[$customer->name] = 'javaScript:void();';

            if(is_numeric($id)){
                $customer = Customer::find($id);
                if($customer == null){
                    return redirect()->back()->with('error','Customer not exists!');
                }
                return view('libs.customer.show')->with([
                    'customer' => $customer,
                    'title' => $title,
                    'breadcrumbs'=> $breadcrumbs
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        if(auth()->user()->can('edit customer')){

            $title = 'Edit '.$customer->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['customers'] = route('customer.index');
            $breadcrumbs[$customer->name] = route('customer.show',$customer->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $customer = Customer::find($id);
                if($customer == null){
                    return redirect()->back()->with('error','customer not exists!');
                }
                return view('libs.customer.edit')->with([
                    'customer' => $customer,
                    'title' => $title,
                    'breadcrumbs' => $breadcrumbs
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        if(auth()->user()->can('update customer')){

            $title = 'Update Customer';
            $breadcrumbs['libs'] = "#";
            $breadcrumbs['customers'] = route('customer.index');

            if(is_numeric($id)){
                $customer = Customer::find($id);
                if($customer == null){
                    return redirect()->back()->with('error','customer not exists!');
                }
                $request->validate([
                    'name' => 'required|max:20',
                    'phone_number' => 'required|max:20',
                    'email' => 'email',
                    'nid' => 'max:30|nullable',
                    'project_id' => 'unique:customers'

                ]);

                $customer->name = $request->input('name');
                $customer->phone_number = $request->input('phone_number');
                $customer->email = $request->input('email');
                $customer->nid = $request->input('nid');
                $customer->address = $request->input('address');
                $customer->project_id = $request->input('project_id');

                try{
                    $customer->save();

                    return redirect()->back()->with('success','successfully updated!');
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete customer')){
            if(is_numeric($id)){
                $customer = Customer::find($id);
                if($customer == null){
                    return redirect()->back()->with('error','customer not exists!');
                }
                try{

                    $customer->delete();
                    return redirect()->route('customer.index')->with('success','successfully deleted!');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e);
                }
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }
}
