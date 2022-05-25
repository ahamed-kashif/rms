<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestorController extends Controller
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
        if(auth()->user()->can('index investor')){
            $investor = Investor::all();

            $title = 'investor';
            $breadcrumbs['Contacts'] = "#";
            $breadcrumbs['investor'] = 'javaScript:void();';


            return view('libs.investor.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breadcrumbs,
                'investor' => $investor
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

        if(auth()->user()->can('create investor')){
            $investor = Investor::all();

            $title = 'Add investor';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['investor'] = route('investor.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.investor.create')->with([
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
     * @return mixed
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'email|unique:investors|nullable',
            'nid' => 'max:30|nullable'

        ]);

        $investor = new Investor;

        $investor->name = $request->input('name');
        $investor->phone_number = $request->input('phone_number');
        $investor->email = $request->input('email');
        $investor->nid = $request->input('nid');
        $investor->address = $request->input('address');
        $investor->is_active = $request->has('is_active');
        try{
            $investor->save();

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
        $investor = Investor::find($id);

        if(auth()->user()->can('show investor')){

            $title = 'Show investor';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['investor'] = route('investor.index');
            $breadcrumbs[$investor->name] = 'javaScript:void();';

            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                $accounts = $this->investor_account($investor->id);
                return view('libs.investor.show')->with([
                    'investor' => $investor,
                    'title' => $title,
                    'breadcrumbs'=> $breadcrumbs,
                    'accounts' => $accounts,
                    'project' => $investor,
                    'upload_url' => route('resource.create.investor',$investor->id)
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
        $investor = Investor::find($id);

        if(auth()->user()->can('edit investor')){

            $title = 'Edit '.$investor->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['investor'] = route('investor.index');
            $breadcrumbs[$investor->name] = route('investor.show',$investor->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                return view('libs.investor.edit')->with([
                    'investor' => $investor,
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
        if(auth()->user()->can('update investor')){

            $title = 'Update investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investor'] = route('investor.index');

            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                $request->validate([
                    'name' => 'required',
                    'phone_number' => 'required',
                    'email' => 'email|unique:investors|nullable',
                    'nid' => 'max:30|nullable'

                ]);

                $investor->name = $request->input('name');
                $investor->phone_number = $request->input('phone_number');
                $investor->email = $request->input('email');
                $investor->nid = $request->input('nid');
                $investor->address = $request->input('address');
                $investor->is_active = $request->has('is_active');
                try{
                    $investor->save();

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
        if(auth()->user()->can('delete investor')){
            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                try{

                    $investor->delete();
                    return redirect()->route('investor.index')->with('success','successfully deleted!');
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
    public function investor_account($id)
    {
        //$project = Project::find($id);
        $invoices = Investor::find($id)->Invoice()->get();
        $account['invoices'] = $invoices;
        return $account;
    }
}
