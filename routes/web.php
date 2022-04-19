<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('contacts')->group(function(){
    //contractor route
    Route::resource('contractor','Libs\ContractorController');
    Route::resource('supplier','Libs\SupplierController');
    Route::resource('engineer','Libs\EngineerController');
    Route::resource('customer','Libs\CustomerController');
    Route::resource('investor','Libs\InvestorController');
});
Route::prefix('project-resource')->group(function (){
    Route::resource('material', 'Libs\MaterialController');
});
Route::resource('project','ProjectController');
Route::get('/investor-projects','ProjectController@investor')->name('project.investor.list');
Route::get('/investor-projects/accounts','AccountController@investors_account_list')->name('project.investor.account.list');
Route::get('/investor-projects/accounts/{id}','AccountController@investor_account_show')->name('project.investor.account.show');
Route::prefix('project/{id}')->group(function (){
    Route::prefix('/resource')->group(function (){
        Route::get('/','ResourceController@index')->middleware('auth')->name('resource.index');
        Route::get('upload','ResourceController@upload')->middleware('auth')->name('resource.create');
        Route::get('download/{uuid}','ResourceController@download')->middleware('auth')->name('resource.download');
        Route::delete('destroy/{uuid}','ResourceController@destroy')->middleware('auth')->name('resource.destroy');
    });
   Route::get('/contractors','ProjectContactsController@contractors_view')->name('project.contractors.view');
   Route::post('/contractors','ProjectContactsController@add_contractor')->name('project.contractor.add');
   Route::post('/contractors/new','ProjectContactsController@add_new_contractor')->name('project.contractor.add.new');
   Route::put('/contractors/{contractor}/remove','ProjectContactsController@remove_contractor')->name('project.contractor.remove');
   Route::get('/suppliers','ProjectContactsController@suppliers_view')->name('project.suppliers.view');
   Route::post('/suppliers','ProjectContactsController@add_supplier')->name('project.supplier.add');
   Route::post('/suppliers/new','ProjectContactsController@add_new_supplier')->name('project.supplier.add.new');
   Route::put('/suppliers/{supplier}/remove','ProjectContactsController@remove_supplier')->name('project.supplier.remove');
   Route::get('/engineers','ProjectContactsController@engineers_view')->name('project.engineers.view');
   Route::post('/engineers','ProjectContactsController@add_engineer')->name('project.engineer.add');
   Route::post('/engineers/new','ProjectContactsController@add_new_engineer')->name('project.engineer.add.new');
   Route::put('/engineers/{engineer}/remove','ProjectContactsController@remove_engineer')->name('project.engineer.remove');
   Route::get('/investors','ProjectContactsController@investors_view')->name('project.investors.view');
   Route::post('/investors','ProjectContactsController@add_investor')->name('project.investor.add');
   Route::post('/investors/new','ProjectContactsController@add_new_investor')->name('project.investor.add.new');
   Route::put('/investors/{investor}/remove','ProjectContactsController@remove_investor')->name('project.investor.remove');


});
Route::get('/employees','EmployeeController@index')->name('employee.index');
Route::get('/employee/{id}','EmployeeController@show')->name('employee.show');
Route::post('/employee/store','EmployeeController@store')->name('employee.store');
Route::get('/employee/edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::put('/employee/update/{id}','EmployeeController@update')->name('employee.update');
Route::delete('/employee/delete/{id}','EmployeeController@delete')->name('employee.destroy');
/****Invoice Routes****/
Route::prefix('invoice')->group(function(){
    Route::get('/','InvoiceController@index')->name('invoice.index');
    Route::get('create','InvoiceController@create')->name('invoice.create');
    Route::get('show/{id}','InvoiceController@show')->name('invoice.show');
    Route::post('initial-stage','InvoiceController@initial_stage')->name('invoice.initial');
    Route::get('/payment-method/add','InvoiceController@payment_form')->name('invoice.payment.method');
    Route::post('/payment-method/update','InvoiceController@payment_update')->name('invoice.payment.method.update');
    Route::get('/account-head/add','InvoiceController@account_head')->name('invoice.account-head.create');
    Route::post('/account-head/update','InvoiceController@account_head_update')->name('invoice.account-head.update');
    Route::get('/person/add','InvoiceController@add_person')->name('invoice.person.add');
    Route::post('/person/update','InvoiceController@person_update')->name('invoice.person.update');
    Route::get('/material/add/{id}','InvoiceController@add_material')->name('invoice.material.add');
    Route::post('/material/update/{id}','InvoiceController@material_update')->name('invoice.material.update');
    Route::get('/amount/add/{id}','InvoiceController@add_amount')->name('invoice.amount.add');
    Route::post('/amount/update/{id}','InvoiceController@amount_update')->name('invoice.amount.update');
    Route::get('/salary/create','InvoiceController@createSalary')->name('invoice.salary.create');
    Route::post('/salary/update','InvoiceController@updateSalary')->name('invoice.salary.update');
});
Route::get('/accounts','AccountController@index')->name('account.index');
Route::get('contacts/customer/{id}/print','Libs\CustomerController@print_customer')->name('customer.print');
Route::prefix('project-materials')->group(function(){
    Route::get('/','ProjectMaterialController@index')->name('project-material.index');
    Route::get('/{id}/materials','ProjectMaterialController@materialIndex')->name('project-material.material.index');
});
/*** sani **/
Route::get('/customers/{customer_id}/flat/create','Libs\FlatController@create')->name('flat.create');
Route::post('/customers/{customer_id}/flat/store','Libs\FlatController@store')->name('flat.store');
Route::get('/flat/','Libs\FlatController@index')->name('flat.index');
Route::get('/flat/{id}','Libs\FlatController@show')->name('flat.show');
Route::get('/flat/edit/{id}','Libs\FlatController@edit')->name('flat.edit');
Route::post('/{id}','Libs\FlatController@update')->name('flat.update');
Route::delete('/{id}','Libs\FlatController@destroy')->name('flat.destroy');
Route::get('/forward/project/{id}', function(Request $request, $id){
   try{
       $project = App\Models\Project::findorfail($id);
       if(session()->has('forward_url')){
           session()->forget('forward_url');
       }
       switch ($request->tag) {
           case 'contractor':
               session(['forward_url' => url()->previous()]);
               //dd(session('forward_url'));
               return redirect()->route('project.contractor.add',$project->id);
           case 'supplier':
               session(['forward_url' => url()->previous()]);
               //dd(session('forward_url'));
               return redirect()->route('project.supplier.add',$project->id);
           case 'engineer':
               session(['forward_url' => url()->previous()]);
               //dd(session('forward_url'));
               return redirect()->route('project.engineer.add',$project->id);
           case 'investor':
               session(['forward_url' => url()->previous()]);
               //dd(session('forward_url'));
               return redirect()->route('project.investor.add',$project->id);
           default:
               break;
       }
       return redirect();
   }catch (\Exception $e){
       return redirect()->back()->with(['error' => $e->getMessage()]);
   }

})->name('forward');

Route::get('/t', function (){
   dd(url()->full());
});
