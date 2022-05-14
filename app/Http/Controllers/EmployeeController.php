<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
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
        return redirect()->back()->with([
            'error' => 'Service not available'
        ]);
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
