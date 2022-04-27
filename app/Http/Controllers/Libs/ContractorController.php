<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
use App\Models\Contractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContractorController extends Controller
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
        if(auth()->user()->can('index contractor')){
            $contractors = Contractor::all();
            $title = 'Contractor';
            $breacrumbs['Contacts'] = "#";
            $breacrumbs['Contractors'] = 'javaScript:void();';
            return view('libs.contractor.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breacrumbs,
                'contractors' => $contractors
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

        if(auth()->user()->can('create contractor')){
            $contractor = Contractor::all();

            $title = 'Add Contractor';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['contractors'] = route('contractor.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.contractor.create')->with([
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
     * @param  Request  $request
     * @return mixed
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:20',
            'email' => 'email|unique:contractors|nullable',
            'nid' => 'max:30|nullable'

        ]);
        $contractor = new Contractor;
        $contractor->name = $request->input('name');
        $contractor->phone_number = $request->input('phone_number');
        $contractor->email = $request->input('email');
        $contractor->nid = $request->input('nid');
        $contractor->address = $request->input('address');

        if($request->has('description')){
            $contractor->description = $request->description;
        }
        $contractor->is_active = $request->has('is_active');
        try{
            $contractor->save();

            return redirect()->back()->with('success','successfully stored');
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
        $contractor = Contractor::find($id);

        if(auth()->user()->can('show contractor')){

            $title = 'Show Contractor';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['contractors'] = route('contractor.index');
            $breadcrumbs[$contractor->name] = 'javaScript:void();';
            $accounts = $this->contractor_account($contractor->id);
            if(is_numeric($id)){
                $contractor = Contractor::find($id);
                if($contractor == null){
                    return redirect()->back()->with('error','contractor not exists!');
                }
                return view('libs.contractor.show')->with([
                    'contractor' => $contractor,
                    'title' => $title,
                    'breadcrumbs'=> $breadcrumbs,
                    'accounts' => $accounts,
                    'project' => $contractor,
                    'upload_url' => route('resource.create.contractor',$contractor->id)
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
        $contractor = Contractor::find($id);

        if(auth()->user()->can('edit contractor')){

            $title = 'Edit '.$contractor->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['contractors'] = route('contractor.index');
            $breadcrumbs[$contractor->name] = route('contractor.show',$contractor->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $contractor = Contractor::find($id);
                if($contractor == null){
                    return redirect()->back()->with('error','contractor not exists!');
                }
                return view('libs.contractor.edit')->with([
                    'contractor' => $contractor,
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
        if(auth()->user()->can('update contractor')){

            $title = 'Update Contractor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['contractors'] = route('contractor.index');

            if(is_numeric($id)){
                $contractor = Contractor::find($id);
                if($contractor == null){
                    return redirect()->back()->with('error','contractor not exists!');
                }
                $request->validate([
                    'name' => 'required|max:20',
                    'phone_number' => 'required|max:20',
                    'email' => 'email|unique:contractors|nullable',
                    'nid' => 'max:30|nullable'

                ]);

                $contractor->name = $request->input('name');
                $contractor->phone_number = $request->input('phone_number');
                $contractor->email = $request->input('email');
                $contractor->nid = $request->input('nid');
                $contractor->address = $request->input('address');

                $contractor->is_active = $request->has('is_active');
                try{
                    $contractor->save();

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
        if(auth()->user()->can('delete contractor')){
            if(is_numeric($id)){
                $contractor = Contractor::find($id);
                if($contractor == null){
                    return redirect()->back()->with('error','contractor not exists!');
                }
                try{

                    $contractor->delete();
                    return redirect()->route('contractor.index')->with('success','successfully deleted!');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e);
                }
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }

    /**
     * Accounts calculation of a project.
     *
     * @param  int  $id
     * @return mixed
     */
    public function contractor_account($id)
    {
        //$project = Project::find($id);
        $invoices = Contractor::find($id)->Invoice()->get();
        $account['invoices'] = $invoices;
        return $account;
    }
}
