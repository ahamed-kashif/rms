<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    public $fillable = ['name','phone_number'];
    public $timestamps = true;

    public function scopeActive(){
        return $this->where('is_active','=',1);
    }
}
