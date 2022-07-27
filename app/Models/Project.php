<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia, softDeletes;
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
        return $this->hasMany(Customer::class);
    }

    public function invoices(){
        return $this->hasMany(Invoice::class,'project_id','id');
    }

    public function flat(){
        return $this->hasMany(Flat::class,'project_id');
    }

    public function scopeisActive($q){
        return $q->where('is_active',1);
    }
}

