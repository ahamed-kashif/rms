<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
| All front-end Ajax routes are defined here
*/
Route::prefix('ajax')->group(function(){
    Route::post('store-resource/{id}','AjaxController@upload_file_to_server')->name('ajax.upload.resource');
    Route::post('store-resource-contractor/{id}','AjaxController@upload_contractor_file_to_server')->name('ajax.upload.resource.contractor');
    Route::post('store-resource-customer/{id}','AjaxController@upload_customer_file_to_server')->name('ajax.upload.resource.customer');
    Route::post('store-resource-engineer/{id}','AjaxController@upload_engineer_file_to_server')->name('ajax.upload.resource.engineer');
    Route::post('store-resource-supplier/{id}','AjaxController@upload_supplier_file_to_server')->name('ajax.upload.resource.supplier');
    Route::post('store-resource-investor/{id}','AjaxController@upload_investor_file_to_server')->name('ajax.upload.resource.investor');
    Route::post('store-resource-employee/{id}','AjaxController@upload_employee_file_to_server')->name('ajax.upload.resource.employee');
    Route::post('delete-resource/{id}','AjaxController@delete_project_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.by_name');
    Route::post('delete-resource/contractor/{id}','AjaxController@delete_contractor_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.contractor');
    Route::post('delete-resource/customer/{id}','AjaxController@delete_customer_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.customer');
    Route::post('delete-resource/engineer/{id}','AjaxController@delete_engineer_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.engineer');
    Route::post('delete-resource/supplier/{id}','AjaxController@delete_supplier_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.supplier');
    Route::post('delete-resource/investor/{id}','AjaxController@delete_investor_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.investor');
    Route::post('delete-resource/employee/{id}','AjaxController@delete_employee_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.employee');
    Route::put('update-project-status/{id}','AjaxController@update_project_status')->middleware('auth:api')->name('ajax.update.project.status');
    Route::put('projects','AjaxController@project_list')->middleware('auth:api')->name('ajax.project.list');
});
