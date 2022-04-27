<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Engineer extends Model implements HasMedia
{
    use IsContactable, InteractsWithMedia;
    use Invoiceable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone'];
    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
    }
}
