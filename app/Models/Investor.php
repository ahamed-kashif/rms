<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Investor extends Model implements HasMedia
{
    use IsContactable, InteractsWithMedia;
    use Invoiceable;
    public $fillable = ['name','phone_number'];
    public $timestamps = true;

    public function scopeActive(){
        return $this->where('is_active','=',1);
    }
    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
    }
}
