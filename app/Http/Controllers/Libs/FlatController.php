<?php

namespace App\Http\Controllers\Libs;
use App\Models\Flat;
use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Http\Request;

class FlatController extends Controller
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
        if(auth()->user()->can('index flat')){
            $flat = FLat::all();

            $title = 'Flat';
            $breacrumbs['Contacts'] = "#";
            $breacrumbs['Flat'] = 'javaScript:void();';


            return view('libs.flat.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breacrumbs,
                'flats' => $flat


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
    public function create($customer_id)
    {
        if(auth()->user()->can('create flat')){
        if(is_numeric($customer_id)) {
            $customer = Customer::find($customer_id);
            $project_id = $customer->project_id;

            $title = 'Add Flat';
            $breadcrumbs['contacts'] = "#";
            //$breadcrumbs['customers'] = route('flat.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.flat.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project_id' => $project_id,
                'customer_id' => $customer_id
            ]);
        }}
        else{
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
            'flat_title' =>'required',
            'flat_floor' =>'required',
            'size' => 'required|numeric',
            'installment_duration' => 'required_if:is_installable,==,1',
            'installment_amount' => 'required_if:is_installable,==,1',
            'flat_booking'=>'required|numeric',
            'flat_downpayment'=>'required|numeric'
        ]);

        $flat = new Flat();

        $flat->project_id = $request->project_id;
        $flat->customer_id = $request->customer_id;

        $flat->flat_title = $request->input('flat_title');
        $flat->is_avail_loan = $request->has('is_avail_loan');
        $flat->size = $request->input('size');
        $flat->floor_number = $request->input('flat_floor');
        $flat->is_installable = $request->has('is_installable');
        $flat->installment_duration = $request->input('installment_duration');
        $flat->installment_amount = $request->input('installment_amount');
        $flat->flat_booking = $request->input('flat_booking');
        $flat->flat_amount = $request->input('flat_amount');
        $flat->flat_downpayment = $request->input('flat_downpayment');
        $flat->car_parking_no = $request->input('car_parking_no');
        $flat->particulars = $request->input('particulars');




        try{
            $flat->save();

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
        $flat = FLat::find($id);

        if(auth()->user()->can('show flat')){

            $title = 'Show Flat';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['flat'] = route('flat.index');
            $breadcrumbs[$flat->name] = 'javaScript:void();';

            if(is_numeric($id)){
                $flat = Flat::find($id);
                if($flat == null){
                    return redirect()->back()->with('error','Flat not exists!');
                }
                return view('libs.flat.show')->with([
                    'flat' => $flat,
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
        $flat = Flat::find($id);

        if(auth()->user()->can('edit flat')){

            $title = 'Edit '.$flat->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['flat'] = route('flat.index');
            $breadcrumbs[$flat->name] = route('flat.show',$flat->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $flat = Flat::find($id);
                if($flat == null){
                    return redirect()->back()->with('error','flat not exists!');
                }
                return view('libs.flat.edit')->with([
                    'flat' => $flat,
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
        if(auth()->user()->can('update flat')){

            $title = 'Update Flat';
            $breadcrumbs['libs'] = "#";
            $breadcrumbs['flat'] = route('flat.index');

            if(is_numeric($id)){
                $flat = Flat::find($id);
                if($flat == null){
                    return redirect()->back()->with('error','flat not exists!');
                }
                $flat->project_id = $request->project_id;
                $flat->customer_id = $request->customer_id;

                $flat->flat_title = $request->input('flat_title');
                $flat->is_avail_loan = $request->has('is_avail_loan');
                $flat->flat_number = $request->input('flat_number');
                $flat->is_installable = $request->has('is_installable');
                $flat->installment_duration = $request->input('installment_duration');
                $flat->installment_amount = $request->input('installment_amount');
                $flat->booking_amount = $request->input('booking_amount');
                $flat->flat_amount = $request->input('flat_amount');
                $flat->flat_utility = $request->input('flat_utility');
                $flat->flat_car_parking = $request->input('flat_car_parking');
                $flat->flat_total_received = $request->input('flat_total_received');
                $flat->flat_initial_received = $request->input('flat_initial_received');
                $flat->flat_balance = $request->input('flat_balance');


                try{
                    $flat->save();

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
        if(auth()->user()->can('delete flat')){
            if(is_numeric($id)){
                $flat = FLat::find($id);
                if($flat == null){
                    return redirect()->back()->with('error','flat not exists!');
                }
                try{

                    $flat->delete();
                    return redirect()->route('flat.index')->with('success','successfully deleted!');
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

