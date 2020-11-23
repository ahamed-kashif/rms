<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the materials.
     *
     * @return mixed
     */
    public function index()
    {
        if(auth()->user()->can('index material')){
            $materials  = Material::all();
            $title = 'Material';
            $breadcrumbs['project resources'] = 'javaScript:void;';
            $breadcrumbs['materials'] = 'javaScript:void;';
            return view('libs.material.index')->with([
                'materials' => $materials,
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
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
        $title = 'New Material';
        $breadcrumbs['project resources'] = 'javaScript:void;';
        $breadcrumbs['materials'] = route('material.index');
        $breadcrumbs['new material'] = 'javaScript:void();';
        if(auth()->user()->can('create material')){
            return view('libs.material.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }
        return redirect()->route('home')->with('error','Unauthorized Access!');
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
           'title' => 'required|max:30',
           'unit' => 'nullable|max:20'
        ]);
        $material = new Material;
        $material->title = $request->title;
        $material->unit = $request->unit;
        try{
            if(auth()->user()->can('store material')){
                $material->save();
                return redirect()->route('material.edit',$material->id)->with('success','Material stored successfully!');
            }else{
             return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }catch (\Exception $e){
            return redirect()->route('home')->withErrors($e->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit($id)
    {
        $material = Material::find($id);
        $title = $material->title;
        $breadcrumbs['project resources'] = 'javaScript:void;';
        $breadcrumbs['materials'] = route('material.index');
        $breadcrumbs[$material->title] = 'javaScript:void();';
        $breadcrumbs['edit'] = 'javaScript:void();';
        if(auth()->user()->can('edit material')){
            return view('libs.material.edit')->with([
                'material' => $material,
                'title'=> $title,
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
        $material = Material::find($id);
        $material->title = $request->title;
        $material->unit = $request->unit;
        try{
            if(auth()->user()->can('update material')){
                $material->save();
                return redirect()->route('material.edit',$material->id)->with('success','Material updated successfully!');
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }catch (\Exception $e){
            return redirect()->route('home')->withErrors($e->getMessage());
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
        $material = Material::find($id);
        try {
            if(auth()->user()->can('delete material')){
                $material->delete();
                return redirect()->back()->with('success','Successfully deleted '.$material->title);
            }else{
                return redirect()->route('home')->with('error','Unauthorized Access!');
            }
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
