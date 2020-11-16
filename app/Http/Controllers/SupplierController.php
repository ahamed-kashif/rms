<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;



class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->can('index supplier')) {
            $supplier = Supplier::all();
            $title = 'Supplier List';
            $breadcrumbs['contacts'] = '#';
            $breadcrumbs['supplier'] = route('supplier.index');
            return view('supplier.index')->with([
                'suppliers' => $supplier,
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }else{
            return redirect('home')->with('error','Unauthorized Access');
        }
    }


    public function create()
    {
        if(auth()->user()->can('create supplier')){

            return view('supplier.create');
        }else{
            return redirect('home')->with('error','Unauthorized Access');
        }

    }


    public function store(Request $request){



        $request->validate([
            'name' => 'required',
            'phone' => 'unique:suppliers|required',
            'email' => 'required|unique:suppliers',
            'address' => 'required|max:25',
            'nid' => 'required|max:25',
            'material' => 'required'

        ]);


        $supplier = new Supplier();

        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->nid = $request->nid;
        $supplier->material = $request->material;
        $supplier->is_active = $request->has('is_active');


        try{
            $supplier->save();
            return redirect(route('supplier.index'))->with('success','successfully stored');
        }catch (\Exception $e){
            //dd($e);
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    public function show($id)
    {
        if(auth()->user()->can('show supplier')){
            if(is_numeric($id)){
                $supplier = Supplier::find($id);
                if($supplier == null){
                    return redirect()->back()->with('error','Supplier not exists!');
                }
                return view('supplier.show')->with([
                    'suppliers' => $supplier
                ]);
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }
    public function edit($id)
    {
        if(auth()->user()->can('edit supplier')){
            if(is_numeric($id)){
                $supplier = Supplier::find($id);
                if($supplier == null){
                    return redirect()->back()->with('error','Supplier not exists!');
                }

                return view('supplier.edit')->with([
                    'suppliers' => $supplier
                ]);
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }

    public function update(Request $request, $id)
    {

        if(auth()->user()->can('update supplier')){
            if(is_numeric($id)){
                $supplier = Supplier::find($id);


                if($supplier == null){
                    return redirect()->back()->with('error','supplier not exists!');

                }

//                $request->validate([
//                    'name' => 'required',
//                    'phone' => 'unique:suppliers|required',
//                    'email' => 'required|unique:suppliers',
//                    'address' => 'required|max:25',
//                    'nid' => 'required|max:25',
//                    'material' => 'required'
//
//                ]);


                $supplier->name = $request->name;
                $supplier->phone = $request->phone;
                $supplier->email = $request->email;
                $supplier->address = $request->address;
                $supplier->nid = $request->nid;
                $supplier->material = $request->material;
                $supplier->is_active = $request->has('is_active');

                try{
                    $supplier->save();
                    return redirect(route('supplier.index'))->with('success','successfully updated!');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }
    public function destroy($id)
    {
        if(auth()->user()->can('delete supplier')){
            if(is_numeric($id)){
                $supplier = Supplier::find($id);
                if($supplier == null){
                    return redirect()->back()->with('error','Supplier not exists!');
                }
                try{
                    $supplier->delete();
                    return redirect(route('supplier.index'))->with('success','successfully deleted!');
                }catch (\Exception $e){
                    return redirect()->back()->withErrors($e->getMessage());
                }
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }




}
