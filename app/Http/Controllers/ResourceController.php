<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ResourceController extends Controller
{


    public function index($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = route('project.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index project')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }



    public function upload($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = route('project.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update project')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project
            ]);
        }
    }



    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        $project->addMultipleMediaFromRequest(['file'])
            ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection();
            });

        return ['data'=>'success'];
    }




    public function download($id,$uuid)
    {
        $media = Media::findByUuid($uuid);
        return response()->download($media->getPath(), $media->file_name);
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
