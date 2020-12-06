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
        $projects = Project::all();
        $title = 'Project List';
        $breadcrumbs['projects'] = '#';
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

        try{
            if($user->can('update project')){
                $project->save();
                return redirect()->route('project.edit',$project->id)->with('success','Project stored successfully!');
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $title = $project->name;
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = '#';
        if($user->can('show project')){
            return view('project.show')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
