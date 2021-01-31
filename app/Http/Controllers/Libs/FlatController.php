<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Project;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->can('index flat')){
            $flat = FLat::all();

            $title = 'Flat';
            $breacrumbs['Contacts'] = "#";
            $breacrumbs['Flat'] = 'javaScript:void();';


            return view('flat.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breacrumbs,
                'flat' => $flat


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

        if(auth()->user()->can('create flat')){
            $title = 'Add Flat';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['flat'] = route('flat.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            $projects = Project::all();
            return view('flat.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'projects' => $projects
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

            'flat_number' =>'min:2|required',
            'installment_amount' => 'required',
            'installment_duration' => 'required',
            'booking_amount'=>'required'

        ]);

        $flat = new Flat();

        $flat->project_id = $request->input('project_id');
        $flat->flat_number = $request->input('flat_number');
        $flat->is_avail_loan = $request->input('is_avail_loan');
        $flat->is_installable = $request->input('is_installable');
        $flat->installment_amount = $request->input('installment_amount');
        $flat->installment_duration = $request->input('installment_duration');
        $flat->utility = $request->input('utility');
        $flat->car_parking = $request->input('car_parking');

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
                return view('libs.customer.show')->with([
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
                    return redirect()->back()->with('error','customer not exists!');
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
                    return redirect()->back()->with('error','customer not exists!');
                }
                $request->validate([
                    'flat_number' =>'min:2|required',
                    'installment_amount' => 'required',
                    'installment_duration' => 'required',
                    'booking_amount'=>'required'

                ]);

                $flat->project_id = $request->input('project_id');
                $flat->flat_number = $request->input('flat_number');
                $flat->is_avail_loan = $request->input('is_avail_loan');
                $flat->is_installable = $request->input('is_installable');
                $flat->installment_amount = $request->input('installment_amount');
                $flat->installment_duration = $request->input('installment_duration');
                $flat->booking_amount = $request->input('booking_amount');
                $flat->utility = $request->input('utilityr');
                $flat->car_parking = $request->input('car_parking');

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

