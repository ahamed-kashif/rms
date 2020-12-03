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
    //TODO:write investors,suppliers and engineers routes down here
    Route::resource('supplier','Libs\SupplierController');
    Route::resource('engineer','Libs\EngineerController');
    Route::resource('customer','Libs\CustomerController');
    Route::resource('investor','Libs\InvestorController');
});
Route::prefix('project-resource')->group(function (){
    Route::resource('material', 'Libs\MaterialController');
});
Route::resource('project','ProjectController');
Route::prefix('ajax')->group(function(){
    Route::put('update-project-status/{id}','AjaxController@update_project_status')->name('ajax.update.project.status');
});
Route::prefix('project/{id}/resource')->group(function (){
    Route::get('upload','ResourceController@upload')->middleware('auth')->name('resource.create');
    Route::post('upload','ResourceController@update')->name('resource.update');
    Route::get('download/{uuid}','ResourceController@download')->middleware('auth')->name('resource.download');
});
