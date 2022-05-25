<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
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
    public function index()
    {

        $projects = Project::where('is_investor_project',0)->get();
        $title = 'Project List';
        $breadcrumbs['projects'] = route('project.index');
        $user = Auth::user();
        if($user->can('index project')){
            return view('project.index')->with([
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
     * @return mixed
     */
    public function investor()
    {
        $projects = Project::where('is_investor_project',1)->get();
        $title = 'Investor Project List';
        $breadcrumbs['Investor projects'] = route('project.investor.list');
        $user = Auth::user();
        if($user->can('index project')){
            return view('project.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'projects' => $projects
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        $user = Auth::user();
        $title = 'Create Project';
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs['create project'] = '#';
        if($user->can('create project')){
            return view('project.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
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
            'area' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required',
            'budget' => 'required|numeric',
        ]);
        $user = Auth::user();
        $project = new Project;

        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->area = $request->input('area');
        $project->address = $request->input('address');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->budget = $request->input('budget');
        $project->contractor_budget = $request->input('contractor_budget');
        $project->supplier_budget = $request->input('supplier_budget');
        $project->engineer_budget = $request->input('engineer_budget');
        if($request->has('is_investor_project')){
            $project->is_investor_project = 1;
        }else{
            $project->is_investor_project = 0;
        }

        try{
            if($user->can('update project')){
                $project->save();
                return redirect()->route('project.show',$project->id)->with('success','Project stored successfully!');
            }else{
                return redirect()->back()->with('Unauthorized Access!');
            }
        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
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
        $user = Auth::user();
        $project = Project::findorfail($id);
        //dd($project->customers()->get());
        $title = $project->name;
        if($project->is_investor_project){
            $breadcrumbs['investor projects'] = route('project.investor.list');
        }else{
            $breadcrumbs['projects'] = route('project.index');
        }
        $breadcrumbs[$project->name] = '#';
        $accounts = $this->project_account($project->id);
        if($user->can('show project')){
            return view('project.show')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'accounts' => $accounts,
                'contractorBalance' => $this->contractor_balance($project->id),
                'projectBalance' => $this->project_balance($project->id),
                'supplierBalance' => $this->supplier_balance($project->id),
                'engineerBalance' => $this->engineer_balance($project->id),
                'upload_url' => route('resource.create',$project->id)
            ]);
        }
        return redirect()->route('home')->with([

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $title = 'Edit '.$project->name;
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = route('project.show',$project->id);
        $breadcrumbs['edit'] = '#';
        if($user->can('create project')){
            return view('project.edit')->with([
                'project' => $project,
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'area' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required',
            'budget' => 'required|numeric',
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->area = $request->input('area');
        $project->address = $request->input('address');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->budget = $request->input('budget');
        $project->contractor_budget = $request->input('contractor_budget');
        $project->supplier_budget = $request->input('supplier_budget');
        $project->engineer_budget = $request->input('engineer_budget');
        if($request->has('is_investor_project')){
            $project->is_investor_project = 1;
        }else{
            $project->is_investor_project = 0;
        }

        try{
            if($user->can('update project')){
                $project->save();
                return redirect()->back()->with('success','Project updated successfully!');
            }else{
                return redirect()->back()->with('Unauthorized Access!');
            }
        }catch (\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        return redirect()->route('project.show',$id)->with('error','Not Possible');
        try{
            $project = Project::findorfail($id);
            $project->contractors()->detach();
            $project->suppliers()->detach();
        }catch (\Exception $e){
            return redirect()->route('project.index',$e->getMessage());
        }
    }

    /**
     * Accounts calculation of a project.
     *
     * @param  int  $id
     * @return mixed
     */
    public function project_account($id)
    {
        $project = Project::findorfail($id);
        if($project->invoices()->count() < 1){
            return 0;
        }
        $invoices = Project::find($id)->invoices()->get();
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


    public function project_balance($id){
        $project = Project::find($id);
        $invoices = $project->invoices()->get();
        $balance = $project->budget;
        if(count($invoices) == 0){
            return -1;
        }
        foreach($invoices as $invoice) {
            if($invoice->is_checkin){
                $balance = $balance + (float)$invoice->amount;
            }else{
                $balance = $balance - (float)$invoice->amount;
            }
        }

        return  $balance;
    }

    public function contractor_balance($id){
        $project = Project::find($id);
        $contractors = $project->contractors()->get();
        $balance = (float)$project->contractor_budget;

        foreach ($contractors as $contractor){
            $invoices = $contractor->Invoice()->get();
            if(count($invoices) == 0){
                continue;
            }
            foreach($invoices as $invoice) {
                if($invoice->is_checkin){
                    $balance = $balance + (float)$invoice->amount;
                }else{
                    $balance = $balance - (float)$invoice->amount;
                }
            }
        }

        return $balance;
    }

    public function supplier_balance($id){
        $project = Project::find($id);
        $suppliers = $project->suppliers()->get();
        $balance = $project->supplier_budget;

        foreach ($suppliers as $supplier){
            $invoices = $supplier->Invoice()->get();
            if(count($invoices) == 0){
                continue;
            }
            foreach($invoices as $invoice) {
                if($invoice->is_checkin){
                    $balance = $balance + (float)$invoice->amount;
                }else{
                    $balance = $balance - (float)$invoice->amount;
                }
            }
        }

        return $balance;
    }
    public function engineer_balance($id){
        $project = Project::find($id);
        $engineers = $project->engineers()->get();
        $balance = $project->engineer_budget;

        foreach ($engineers as $engineer){
            $invoices = $engineer->Invoice()->where('is_checkin',0)->get();
            if(count($invoices) == 0){
                continue;
            }
            foreach($invoices as $invoice) {
                if($invoice->is_checkin){
                    $balance = $balance + (float)$invoice->amount;
                }else{
                    $balance = $balance - (float)$invoice->amount;
                }
            }
        }

        return $balance;
    }

}
