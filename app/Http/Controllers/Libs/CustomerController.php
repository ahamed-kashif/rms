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
            $project = Project::all();
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
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


        $request->validate([
            'full_name' => 'required|max:20',
            'father_or_husband_name' => 'max:20',
            'mother_name' => 'max:20',
            'occupation' => 'nullable|max:20',
            'date_of_birth'=>'required',
            'nationality'=>'nullable',
            'phone' => 'required|min:11',
            'email' => 'email|unique:contractors',
            'nid' => 'max:30|nullable',
            'nominee_name' => 'required|max:20',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'reference_person_name' => 'required|max:20',
            'project_id' => 'required'
        ]);

        $customer = new Customer();

        $customer->full_name = $request->input('full_name');
        $customer->father_or_husband_name = $request->input('father_or_husband_name');
        $customer->mother_name = $request->input('mother_name');
        $customer->occupation = $request->input('occupation');
        $customer->date_of_birth = $request->input('date_of_birth');
        $customer->nationality = $request->input('nationality');
        $customer->phone_number = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->nid = $request->input('nid');
        $customer->nominee_name = $request->input('nominee_name');
        $customer->present_address = $request->input('present_address');
        $customer->permanent_address = $request->input('permanent_address');
        $customer->reference_person_name = $request->input('reference_person_name');
        $customer->project_id = $request->project_id;
//        $customer->flat_number = $request->input('flat_number');
//        $customer->is_avail_loan = $request->has('is_avail_loan');
//        $customer->is_installable = $request->has('is_installable');
//        $customer->installment_amount = $request->input('installment_amount');
//        $customer->installment_duration = $request->input('installment_duration');
//        $customer->booking_amount = $request->input('booking_amount');


        //dd($customer);
        try{
            //return redirect()->route(‘flat.creat’, ‘customer_id’ => $customer->id);

            $customer->save();
            //dd($customer->id);

            return redirect()->route('flat.create', $customer->id);


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
                    'breadcrumbs' => $breadcrumbs,

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



                $customer->project_id = $request->project_id;
                $customer->full_name = $request->input('full_name');
                $customer->father_or_husband_name = $request->input('father_or_husband_name');
                $customer->mother_name = $request->input('mother_name');
                $customer->occupation = $request->input('occupation');
                $customer->date_of_birth = $request->input('date_of_birth');
                $customer->nationality = $request->input('nationality');
                $customer->phone_number = $request->input('phone');
                $customer->email = $request->input('email');
                $customer->nid = $request->input('nid');
                $customer->nominee_name = $request->input('nominee_name');
                $customer->present_address = $request->input('present_address');
                $customer->permanent_address = $request->input('permanent_address');
                $customer->reference_person_name = $request->input('reference_person_name');

//                $customer->flat_number = $request->input('flat_number');
//                $customer->is_avail_loan = $request->has('is_avail_loan');
//                $customer->is_installable = $request->has('is_installable');
//                $customer->installment_amount = $request->input('installment_amount');
//                $customer->installment_duration = $request->input('installment_duration');
//                $customer->booking_amount = $request->input('booking_amount');


                try{
                    $customer->save();
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
