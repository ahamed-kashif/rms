<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectMaterialController extends Controller
{
    public function index(){
        try{
            $projects = Project::where('is_investor_project',0)->get();
            $title = 'Project List';
            $breadcrumbs['projects'] = route('project-material.index');
            $user = Auth::user();
            if($user->can('index project')){
                return view('project.material.index')->with([
                    'title' => $title,
                    'breadcrumbs' => $breadcrumbs,
                    'projects' => $projects
                ]);
            }
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
    public function materialIndex($id){
        try{
            $project = Project::findOrFail($id);
            $materials = $project->invoices()->has('materials')->with('materials')->get();
            $totalMaterials = [];
            foreach ($materials as $material){
                if(!array_key_exists($material->materials->first()->title,$totalMaterials)){
                    $totalMaterials[$material->materials->first()->title] = $material->materials->first()->pivot->qty;
                }else{
                    $totalMaterials[$material->materials->first()->title] = $totalMaterials[$material->materials->first()->title] + $material->materials->first()->pivot->qty;
                }
            }
            $total = 0;
            foreach ($materials as $m){
                $total = $total + $m->amount;
            }
            $user = Auth::user();
            if($user->can('index project')){
                return view('project.material.index_material')->with([
                    'title' => ucwords($project->name)."'s Materials",
                    'breadcrumbs' => [
                        'Dashboard' => route('home'),
                        'Projects' => route('project-material.index'),
                    ],
                    'materials' => $materials,
                    'total' => $total,
                    'totalMaterials' => $totalMaterials
                ]);
            }
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
}
