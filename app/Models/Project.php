<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $dates = ['start_date','end_date'];

    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
    }

    public function contractors(){
        return $this->morphedByMany(Contractor::class,'contactable','project_contacts','contact_id','contactable_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
    public function suppliers(){
        return $this->morphedByMany(Supplier::class,'contactable','project_contacts','contact_id','contactable_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
    public function engineers(){
        return $this->morphedByMany(Engineer::class,'contactable','project_contacts','contact_id','contactable_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
    public function investors(){
        return $this->morphedByMany(Investor::class,'contactable','project_contacts','contact_id','contactable_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
    public function customers(){
        return $this->morphedByMany(Investor::class,'contactable','project_contacts','contact_id','contactable_id')
                    ->withPivot('purpose')
                    ->withTimestamps();
    }
}

