<?php

namespace App\Models;

use App\Traits\Invoiceable;
use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Supplier extends Model implements HasMedia
{
    use IsContactable, InteractsWithMedia;
    use Invoiceable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone','material','is_active' ];

    public function scopeActive(){
        return $this->where('is_active','=',1);
    }
    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
    }
}
