<?php

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

Auth::routes();

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
   Route::get('/suppliers','ProjectContactsController@suppliers_view')->name('project.suppliers.view');
   Route::post('/suppliers','ProjectContactsController@add_supplier')->name('project.supplier.add');
   Route::post('/suppliers/new','ProjectContactsController@add_new_supplier')->name('project.supplier.add.new');
   Route::get('/engineers','ProjectContactsController@engineers_view')->name('project.engineers.view');
   Route::post('/engineers','ProjectContactsController@add_engineer')->name('project.engineer.add');
   Route::post('/engineers/new','ProjectContactsController@add_new_engineer')->name('project.engineer.add.new');
    Route::get('/investors','ProjectContactsController@investors_view')->name('project.investors.view');
   Route::post('/investors','ProjectContactsController@add_investor')->name('project.investor.add');
   Route::post('/investors/new','ProjectContactsController@add_new_investor')->name('project.investor.add.new');
});
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
    Route::get('/amount/add/{id}','InvoiceController@add_amount')->name('invoice.amount.add');
    Route::post('/amount/update/{id}','InvoiceController@amount_update')->name('invoice.amount.update');
});
Route::get('/accounts','AccountController@index')->name('account.index');
Route::get('contacts/customer/{id}/print','Libs\CustomerController@print_customer')->name('customer.print');

/*** sani **/
Route::get('/customers/{customer_id}/flat/create','Libs\FlatController@create')->name('flat.create');
Route::post('/customers/{customer_id}/flat/store','Libs\FlatController@store')->name('flat.store');
Route::get('/flat/','Libs\FlatController@index')->name('flat.index');
Route::get('/flat/{id}','Libs\FlatController@show')->name('flat.show');
Route::get('/flat/edit/{id}','Libs\FlatController@edit')->name('flat.edit');
Route::post('/{id}','Libs\FlatController@update')->name('flat.update');
Route::delete('/{id}','Libs\FlatController@destroy')->name('flat.destroy');
