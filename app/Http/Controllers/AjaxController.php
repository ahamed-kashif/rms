<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\Investor;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class AjaxController extends Controller
{

    public function update_project_status($id, Request $request){
        $project = Project::find($id);
        $user = Auth::user();
        $response = [];
        $project->is_active = $request->status;
        try{
            $project->update();
            $response['code'] = 200;
            $response['data'] = $project;
            $response['message'] = 'Updated successfully!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = $project;
            $response['message'] = $e->getMessage();
        }
        return $response;
    }
    public function upload_file_to_server(Request $request, $id)
    {

        $project = Project::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }
    public function upload_contractor_file_to_server(Request $request, $id)
    {

        $project = Contractor::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }
    public function upload_customer_file_to_server(Request $request, $id)
    {

        $project = Customer::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }
    public function upload_engineer_file_to_server(Request $request, $id)
    {

        $project = Engineer::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }
    public function upload_supplier_file_to_server(Request $request, $id)
    {

        $project = Supplier::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }

    public function upload_investor_file_to_server(Request $request, $id)
    {

        $project = Investor::find($id);
        try{
            $project->addMultipleMediaFromRequest(['file'])
                ->each(function ($fileAdder) use ($project) {
                    $fileAdder->toMediaCollection();
                });
            $media = $project->getMedia();
            $response['code'] = 200;
            $response['data'] = $media;
            $response['message'] = 'successfully uploaded!';
        }catch (\Exception $e){
            $response['code'] = $e->getCode();
            $response['data'] = null;
            $response['message'] = $e->getMessage();
        }

       return $response;
    }
    public function delete_project_resource_by_name(Request $request, $id){
        $media = Project::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update project')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }

    public function delete_contractor_resource_by_name(Request $request, $id){
        $media = Contractor::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update contractor')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }
    public function delete_customer_resource_by_name(Request $request, $id){
        $media = Customer::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update customer')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }
    public function delete_engineer_resource_by_name(Request $request, $id){
        $media = Engineer::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update engineer')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }
    public function delete_supplier_resource_by_name(Request $request, $id){
        $media = Supplier::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update supplier')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }
    public function delete_investor_resource_by_name(Request $request, $id){
        $media = Investor::find($id)->getMediaByName($request->input('file'));
        $user = Auth::user();
        $response = [];
        if($user->can('update investor')){
            try{
                $media->delete();
                $response['code'] = 200;
                $response['data'] = $media;
                $response['message'] = 'Deleted '.$media->file_name.' successfully!';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $media;
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }

    public function project_list(){
        $user = Auth::user();
        $response = [];
        $projects = Project::all();
        if($user->can('update project')){
            try{
                $response['code'] = 200;
                $response['data'] = $projects;
                $response['message'] = 'project list is successfully fetched';
            }catch (\Exception $e){
                $response['code'] = $e->getCode();
                $response['data'] = $e->getTrace();
                $response['message'] = $e->getMessage();
            }
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
        }
        return $response;
    }
}
