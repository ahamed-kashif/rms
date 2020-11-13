<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;



class SupplierController extends Controller
{

    public function index()
    {
//        if (auth()->user()->can('supplier page')) {
            $supplier = Supplier::all();




            return view('supplier.index')->with([
                'suppliers' => $supplier
            ]);
//        }else{
//            return redirect('home')->with('error','Unauthorized Access');
//        }
    }


    public function create()
    {
//        if(auth()->user()->can('create subcategory')){

            return view('supplier.create');
//        }else{
//            return redirect('home')->with('error','Unauthorized Access');
//        }

    }


    public function store(Request $request)
    {



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



}
