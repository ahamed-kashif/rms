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
    Route::post('delete-resource/{id}','AjaxController@delete_project_resource_by_name')->middleware('auth:api')->name('ajax.delete.resource.by_name');
    Route::put('update-project-status/{id}','AjaxController@update_project_status')->middleware('auth:api')->name('ajax.update.project.status');
});
