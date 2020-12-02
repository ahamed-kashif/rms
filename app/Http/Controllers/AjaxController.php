<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class AjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

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
            $response['data'] = $project;
            $response['message'] = 'Unauthorized Acces!';
        }
        return $response;
    }
}
