<?php

namespace App\Traits;

use App\Models\Project;

trait IsContactable{
    public function projects(){
        return $this->morphToMany(Project::class,'contactable','project_contacts','contactable_id','contact_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
}
