<?php

namespace App;

use App\Traits\Invoiceable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Employee extends Model implements HasMedia
{
    use Invoiceable, InteractsWithMedia, SoftDeletes;
    protected $guarded = ['id','created_at','update_at'];

    public function scopeActive($q){
        return $q->where('active',1);
    }

    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
    }
}
