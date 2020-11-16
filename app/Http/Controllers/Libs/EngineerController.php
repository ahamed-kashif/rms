<?php

namespace App\Http\Controllers\Libs;

use App\Models\Engineer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EngineerController extends Controller
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
        if(auth()->user()->can('index engineer')){
            $engineers = Engineer::all();

            $title = 'Engineers';
            $breacrumbs['Contacts'] = "#";
            $breacrumbs['Engineer'] = 'javaScript:void();';


            return view('libs.engineer.index')->with([
                'title' => $title,
                'breadcrumbs'=> $breacrumbs,
                'engineers' => $engineers
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

        if(auth()->user()->can('create engineer')){
            $engineers = Engineer::all();

            $title = 'Add Engineer';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['engineers'] = route('engineer.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.engineer.create')->with([
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
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'phone_number' => 'required|max:20',
            'email' => 'email|unique:contractors',
            'nid' => 'max:30|nullable'

        ]);

        $engineer = new Engineer();

        $engineer->name = $request->input('name');
        $engineer->phone_number = $request->input('phone_number');
        $engineer->email = $request->input('email');
        $engineer->nid = $request->input('nid');
        $engineer->address = $request->input('address');


        $engineer->is_active = $request->has('is_active');
        try{
            $engineer->save();

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
        $engineer = Engineer::find($id);

        if(auth()->user()->can('show engineer')){

            $title = 'Show Engineer';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['engineers'] = route('engineer.index');
            $breadcrumbs[$engineer->name] = 'javaScript:void();';

            if(is_numeric($id)){
                $engineer = Engineer::find($id);
                if($engineer == null){
                    return redirect()->back()->with('error','Engineer not exists!');
                }
                return view('libs.engineer.show')->with([
                    'engineer' => $engineer,
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
        $engineer = Engineer::find($id);

        if(auth()->user()->can('edit contractor')){

            $title = 'Edit '.$engineer->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['engineers'] = route('engineer.index');
            $breadcrumbs[$engineer->name] = route('engineer.show',$engineer->id);
            $breadcrumbs['edit'] = 'javaScript:void();';

            if(is_numeric($id)){
                $engineer = Engineer::find($id);
                if($engineer == null){
                    return redirect()->back()->with('error','engineer not exists!');
                }
                return view('libs.engineer.edit')->with([
                    'engineer' => $engineer,
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
        if(auth()->user()->can('update engineer')){

            $title = 'Update Engineer';
            $breadcrumbs['libs'] = "#";
            $breadcrumbs['engineers'] = route('engineer.index');

            if(is_numeric($id)){
                $engineer = Engineer::find($id);
                if($engineer == null){
                    return redirect()->back()->with('error','engineer not exists!');
                }
                $request->validate([
                    'name' => 'required|max:20',
                    'phone_number' => 'required|max:20',
                    'email' => 'email',
                    'nid' => 'max:30|nullable'

                ]);

                $engineer->name = $request->input('name');
                $engineer->phone_number = $request->input('phone_number');
                $engineer->email = $request->input('email');
                $engineer->nid = $request->input('nid');
                $engineer->address = $request->input('address');

                $engineer->is_active = $request->has('is_active');
                try{
                    $engineer->save();

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
        if(auth()->user()->can('delete engineer')){
            if(is_numeric($id)){
                $engineer = Engineer::find($id);
                if($engineer == null){
                    return redirect()->back()->with('error','engineer not exists!');
                }
                try{

                    $engineer->delete();
                    return redirect()->route('engineer.index')->with('success','successfully deleted!');
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
