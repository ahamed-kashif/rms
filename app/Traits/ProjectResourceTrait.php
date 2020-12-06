<?php
namespace App\Traits;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;

trait ProjectResourceTrait
{
    public function upload_resource($id){
        $project = Project::find($id);
        $user = Auth::user();
//        if($user->can('update project')){
//            return view()
//        }
    }
}
