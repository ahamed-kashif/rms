<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class AjaxController extends Controller
{

    public function update_project_status($id, Request $request){
        $project = Project::find($id);
        $user = Auth::user();
        $response = [];
        if($user->can('update project')){
            $project->status = $request->status;
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
        }else{
            $response['code'] = 401;
            $response['data'] = null;
            $response['message'] = 'Unauthorized Access!';
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
