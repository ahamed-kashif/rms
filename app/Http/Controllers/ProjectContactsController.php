<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Engineer;
use App\Models\Investor;
use App\Models\Material;
use App\Models\Supplier;
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
     * add supplier to project.
     *
     * @param int $id,
     * @return mixed
     */
    public function suppliers_view($id){
        $user = Auth::user();
        $project = Project::find($id);
        $suppliers = Supplier::all();
        $materials = Material::all();
        if($user->can('update project')){
            $title = $project->name.'\'s suppliers';
            $breadcrumbs['projects'] = route('project.index');
            $breadcrumbs[$project->name] = route('project.show',$project->id);
            $breadcrumbs['suppliers'] = 'javascript:void(0)';
            return view('project_contact.supplier')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'suppliers' => $suppliers,
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
    public function add_supplier($id, Request $request)
    {
        $request->validate([
            'supplier' => 'required',
            'supplier_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $supplier = Supplier::find($request->input('supplier'));
        if($user->can('update project')){
            if($supplier != null){
                try{
                    $project->suppliers()->attach($supplier->id,['purpose' => $request->input('supplier_type')]);
                    return redirect()->back()->with('success','supplier Added successfully.');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','supplier does not exists!');
            }
        }else{
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }

    }

    public function add_new_supplier($id, Request $request){
        $request->validate([
            'supplier_name' => 'required',
            'supplier_phone' => 'required',
            'supplier_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $supplier = new Supplier;
        if($user->can('create supplier')){
            try{
                $supplier->name = $request->input('supplier_name');
                $supplier->phone_number = $request->input('supplier_phone');
                $supplier->save();
            }catch(\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }


            if($user->can('update project')){
                if($supplier != null){
                    try{
                        $project->suppliers()->attach($supplier->id,['purpose' => $request->input('supplier_type')]);
                        return redirect()->back()->with('success','supplier Added successfully.');
                    }catch (\Exception $e){
                        return redirect()->back()->withErrors($e->getMessage());
                    }
                }else{
                    return redirect()->back()->with('error','supplier does not exists!');
                }
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }else{
            return redirect()->back()->with('error', 'Unauthorized Access!');
        }
    }
    /**
     * add supplier to project.
     *
     * @param int $id,
     * @return mixed
     */
    public function engineers_view($id){
        $user = Auth::user();
        $project = Project::find($id);
        $engineers = Engineer::all();
        $materials = Material::all();
        if($user->can('update project')){
            $title = $project->name.'\'s engineers';
            $breadcrumbs['projects'] = route('project.index');
            $breadcrumbs[$project->name] = route('project.show',$project->id);
            $breadcrumbs['engineers'] = 'javascript:void(0)';
            return view('project_contact.engineer')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'engineers' => $engineers,
                'materials' => $materials
            ]);
        }
    }
    /**
     * add engineer to project.
     *
     * @param int $id,
     * @param Request $request,
     * @return mixed
     */
    public function add_engineer($id, Request $request)
    {
        $request->validate([
            'engineer' => 'required',
            'engineer_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $engineer = Engineer::find($request->input('engineer'));
        if($user->can('update project')){
            if($engineer != null){
                try{
                    $project->engineers()->attach($engineer->id,['purpose' => $request->input('engineer_type')]);
                    return redirect()->back()->with('success','Engineer Added successfully.');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','Engineer does not exists!');
            }
        }else{
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }

    }

    public function add_new_engineer($id, Request $request){
        $request->validate([
            'engineer_name' => 'required',
            'engineer_phone' => 'required',
            'engineer_type' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $engineer = new Engineer;
        if($user->can('create engineer')){
            try{
                $engineer->name = $request->input('engineer_name');
                $engineer->phone_number = $request->input('engineer_phone');
                $engineer->save();
            }catch(\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }


            if($user->can('update project')){
                if($engineer != null){
                    try{
                        $project->engineers()->attach($engineer->id,['purpose' => $request->input('engineer_type')]);
                        return redirect()->back()->with('success','Engineer Added successfully.');
                    }catch (\Exception $e){
                        return redirect()->back()->withErrors($e->getMessage());
                    }
                }else{
                    return redirect()->back()->with('error','engineer does not exists!');
                }
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }else{
            return redirect()->back()->with('error', 'Unauthorized Access!');
        }
    }
    /**
     * add investor to project.
     *
     * @param int $id,
     * @return mixed
     */
    public function investors_view($id){
        $user = Auth::user();
        $project = Project::find($id);
        $investors = Investor::all();
        if($user->can('update project')){
            $title = $project->name.'\'s Investors';
            $breadcrumbs['projects'] = route('project.index');
            $breadcrumbs[$project->name] = route('project.show',$project->id);
            $breadcrumbs['investors'] = 'javascript:void(0)';
            return view('project_contact.investor')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'investors' => $investors
            ]);
        }
    }
    /**
     * add investor to project.
     *
     * @param int $id,
     * @param Request $request,
     * @return mixed
     */
    public function add_investor($id, Request $request)
    {
        $request->validate([
            'investor' => 'required',
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $investor = Investor::find($request->input('investor'));
        if($user->can('update project')){
            if($investor != null){
                try{
                    $project->investors()->attach($investor->id,['purpose' => 'Investor']);
                    return redirect()->back()->with('success','Investor Added successfully.');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','Investor does not exists!');
            }
        }else{
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }

    }

    public function add_new_investor($id, Request $request){
        $request->validate([
            'investor_name' => 'required',
            'investor_phone' => 'required'
        ]);
        $user = Auth::user();
        $project = Project::find($id);
        $investor = new Investor;
        if($user->can('create investor')){
            try{
                $investor->name = $request->input('investor_name');
                $investor->phone_number = $request->input('investor_phone');
                $investor->save();
            }catch(\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }


            if($user->can('update project')){
                if($investor != null){
                    try{
                        $project->investors()->attach($investor->id,['purpose' => 'Investor']);
                        return redirect()->back()->with('success','Investor Added successfully.');
                    }catch (\Exception $e){
                        return redirect()->back()->withErrors($e->getMessage());
                    }
                }else{
                    return redirect()->back()->with('error','investor does not exists!');
                }
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }else{
            return redirect()->back()->with('error', 'Unauthorized Access!');
        }
    }

}
