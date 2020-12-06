<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * add contractor to project.
     *
     * @param int $id,
     * @return mixed
     */
    public function contractors_view($id){
        $user = Auth::user();
        $project = Project::find($id);
        $contractors = Contractor::active()->get();
        $materials = Material::all();
        if($user->can('update project')){
            $title = $project->name.'\'s Contractors';
            $breadcrumbs['projects'] = route('project.index');
            $breadcrumbs[$project->name] = route('project.show',$project->id);
            $breadcrumbs['contractors'] = 'javascript:void(0)';
            return view('project_contact.contractor')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'contractors' => $contractors,
                'materials' => $materials
            ]);
        }
    }
    /**
     * add contractor to project.
     *
     * @param int $id,
     * @param Request $request,
     * @return mixed
     */
    public function add_contractor($id, Request $request)
    {
        $request->validate([
            'contractor' => 'required',
            'contractor_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $contractor = Contractor::find($request->input('contractor'));
        if($user->can('update project')){
            if($contractor != null){
                try{
                    $project->contractors()->attach($contractor->id,['purpose' => $request->input('contractor_type')]);
                    return redirect()->back()->with('success','Contractor Added successfully.');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','contractor does not exists!');
            }
        }else{
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }

    }

    public function add_new_contractor($id, Request $request){
        $request->validate([
            'contractor_name' => 'required',
            'contractor_phone' => 'required',
            'contractor_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $contractor = new Contractor;
        if($user->can('create contractor')){
            try{
                $contractor->name = $request->input('contractor_name');
                $contractor->phone_number = $request->input('contractor_phone');
                $contractor->save();
            }catch(\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }


            if($user->can('update project')){
                if($contractor != null){
                    try{
                        $project->contractors()->attach($contractor->id,['purpose' => $request->input('contractor_type')]);
                        return redirect()->back()->with('success','Contractor Added successfully.');
                    }catch (\Exception $e){
                        return redirect()->back()->withErrors($e->getMessage());
                    }
                }else{
                    return redirect()->back()->with('error','contractor does not exists!');
                }
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }else{
            return redirect()->back()->with('error', 'Unauthorized Access!');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
