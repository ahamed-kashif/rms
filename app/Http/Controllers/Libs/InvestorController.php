<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
use App\Models\Contractor;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->can('index investor')) {
            $investor = Investor::active()->get();

            $title = 'Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investors'] = route('libs.investor.index');

            if ($request->has('featured')) {
                $investor = $investor->where('is_featured', 1);
            }
            return view('libs.investor.index')->with([
                'title' => $title,
                'breadcrumbs' => $breacrumbs,
                'investor' => $investor
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

        if(auth()->user()->can('create investor')){
            $investor = Investor::all();

            $title = 'Create Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investor'] = route('libs.investor.index');
            $breacrumbs['create'] = route('libs.investor.create');
            return view('libs.investor.create');
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
            'name' => 'required|max:20|unique:contractors',
            'phone_number' => 'required|max:20',
            'email' => 'email|unique:contractors',
            'nid' => 'max:30'

        ]);

        $investor = new Investor;

        $investor->name = $request->name;
        $investor->phone_number = $request->phone_number;
        $investor->email = $request->email;
        $investor->nid = $request->nid;
        $investor->address = $request->address;

        if($request->has('description')){
            $investor->description = $request->description;
        }
        $investor->is_active = $request->has('is_active');
        $investor->is_featured = $request->has('is_featured');

        try{
            $investor->save();

            return redirect(route('libs.investor.index'))->with('success','successfully stored');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getmessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investor = Investor::find($id);

        if(auth()->user()->can('show investor')){

            $title = 'Show Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investors'] = route('libs.investor.index');
            $breacrumbs[$investor->name] = route('libs.investor.show', $investor->id);

            if(is_numeric($id)){
                $investor = Contractor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                return view('libs.investor.show')->with([
                    'investor' => $investor
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
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investor = Investor::find($id);

        if(auth()->user()->can('edit investor')){

            $title = 'Edit Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investors'] = route('libs.investor.index');

            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                return view('libs.investor.edit')->with([
                    'investor' => $investor
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
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth()->user()->can('update investor')){

            $title = 'Update Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investors'] = route('libs.investor.index');

            if(is_numeric($id)){
                $investor = investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                $request->validate([
                    'name' => 'required|max:20|unique:investors',
                    'phone_number' => 'required|max:20',
                    'email' => 'email|unique:investors',
                    'nid' => 'max:30'

                ]);

                $investor->name = $request->name;
                $investor->phone_number = $request->phone_number;
                $investor->email = $request->email;
                $investor->nid = $request->nid;
                $investor->address = $request->address;

                if($request->has('description')){
                    $investor->description = $request->description;
                }
                $investor->is_active = $request->has('is_active');
                $investor->is_featured = $request->has('is_featured');

                try{
                    $investor->save();

                    return redirect(route('libs.investor.index'))->with('success','successfully updated!');
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
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete investor')){
            $title = 'Delete Investor';
            $breacrumbs['libs'] = "#";
            $breacrumbs['investors'] = route('libs.investor.index');

            if(is_numeric($id)){
                $investor = Investor::find($id);
                if($investor == null){
                    return redirect()->back()->with('error','investor not exists!');
                }
                try{

                    $investor->delete();
                    return redirect(route('libs.investor.index'))->with('success','successfully deleted!');
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
