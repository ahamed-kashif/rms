<?php

namespace App\Http\Controllers\Libs;

use App\Http\Controllers\Controller;
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
            $breadcrumbs['supplier'] = 'javaScript:void();';

            return view('libs.supplier.index')->with([
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
            $title = 'Add Supplier';
            $breadcrumbs['contacts'] = "#";
            $breadcrumbs['suppliers'] = route('supplier.index');
            $breadcrumbs['add'] = 'javaScript:void();';
            return view('libs.supplier.create')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs
            ]);
        }else{
            return redirect('home')->with('error','Unauthorized Access');
        }

    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'unique:suppliers|required',
            'email' => 'nullable|email|unique:suppliers',
            'address' => 'nullable|max:25',
            'nid' => 'nullable|max:25',
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

        $supplier = Supplier::find($id);

        if(auth()->user()->can('show supplier')){

            $title = 'Show Supplier';
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['suppliers'] = route('supplier.index');
            $breadcrumbs[$supplier->name] = 'javaScript:void();';

            if(is_numeric($id)){
                $supplier = Supplier::find($id);
                if($supplier == null){
                    return redirect()->back()->with('error','Supplier not exists!');
                }
                $accounts = $this->supplier_account($supplier->id);
                return view('libs.supplier.show')->with([
                    'supplier' => $supplier,
                    'title' => $title,
                    'breadcrumbs'=> $breadcrumbs,
                    'accounts' => $accounts
                ]);
            }else{
                return redirect()->back()->with('error','wrong url!');
            }
        }
        return redirect('home')->with('error','Unauthorized Access!');
    }


    public function edit($id)
    {

        $supplier = Supplier::find($id);

        if(auth()->user()->can('edit supplier')){

            $title = 'Edit '.$supplier->name;
            $breadcrumbs['contact'] = "#";
            $breadcrumbs['suppliers'] = route('supplier.index');
            $breadcrumbs[$supplier->name] = route('supplier.show',$supplier->id);
            $breadcrumbs['edit'] = 'javaScript:void();';




            if(is_numeric($id)){
                $supplier = Supplier::find($id);
                if($supplier == null){
                    return redirect()->back()->with('error','Supplier not exists!');
                }

                return view('libs.supplier.edit')->with([
                    'supplier' => $supplier,
                    'title' => $title,
                    'breadcrumbs' => $breadcrumbs
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

            $title = 'Update Supplier';
            $breadcrumbs['libs'] = "#";
            $breadcrumbs['suppliers'] = route('supplier.index');

            if(is_numeric($id)){
                $supplier = Supplier::find($id);


                if($supplier == null){
                    return redirect()->back()->with('error','supplier not exists!');

                }

                $request->validate([
                    'name' => 'required',
                    'phone' => 'required',
                    'email' => 'nullable|email',
                    'address' => 'nullable|max:25',
                    'nid' => 'nullable|max:25',

                ]);


                $supplier->name = $request->name;
                $supplier->phone = $request->phone;
                $supplier->email = $request->email;
                $supplier->address = $request->address;
                $supplier->nid = $request->nid;
                $supplier->material = $request->material;
                $supplier->is_active = $request->has('is_active');

                try{
                    $supplier->save();
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

    /**
     * Accounts calculation of a project.
     *
     * @param  int  $id
     * @return mixed
     */
    public function supplier_account($id)
    {
        //$project = Project::find($id);
        $invoices = Supplier::find($id)->Invoice()->get();
        $account['invoices'] = $invoices;
        return $account;
    }


}
