<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(!Auth::user()->can('index employee')){
            return redirect()->back()->with([
                'error' => 'Unauthorized'
            ]);
        }
        try{
            return view('employee.index')->with([
                'title' => 'Employees',
                'breadcrumbs' => [
                    'Dashboard' => route('home')
                ],
                'employees' => Employee::all()
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function store(Request $request){
        if(!Auth::user()->can('store employee')){
            return redirect()->back()->with([
                'error' => 'Unauthorized'
            ]);
        }
        try{
         Employee::create($request->except(['_token','_method']));
         return redirect()->back()->with([
             'success' => 'Employee Created.'
         ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function edit($id){
        if(!Auth::user()->can('edit employee')){
            return redirect()->back()->with([
                'error' => 'Unauthorized'
            ]);
        }
        try{
            $emp = Employee::findOrFail($id);
            return view('employee.edit')->with([
                'title' => 'Employee Edit',
                'breadcrumbs' => [
                    'Dashboard' => route('home')
                ],
                'employee' => $emp
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function update($id, Request $request){
        if(!Auth::user()->can('update employee')){
            return redirect()->back()->with([
                'error' => 'Unauthorized'
            ]);
        }
        try{
            Employee::findOrFail($id)->update($request->except(['_token','_method']));
            return redirect()->back()->with([
                'success' => 'Employee Updated.'
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }
    public function delete($id){
        if(!Auth::user()->can('delete employee')){
            return redirect()->back()->with([
                'error' => 'Unauthorized'
            ]);
        }
        try{
            Employee::findOrFail($id)->delete();
            return redirect()->back()->with([
                'success' => 'Employee Deleted'
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function show($id){
        try{
            $employee = Employee::findOrFail($id);
            $accounts['invoices'] = $employee->Invoice()->get();
            return view('employee.show')->with([
                'title' => $employee->name.' | Employee',
                'breadcrumbs' => [
                    'Dashboard' => route('home'),
                    'Employees' => route('employee.index'),
                    $employee->name => 'javascript:void(0)'
                ],
                'employee' => $employee,
                'accounts' => $accounts,
                'project' => $employee,
                'upload_url' => route('resource.create.employee',$employee->id)
            ]);
        }catch (\Exception $e){
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

}
