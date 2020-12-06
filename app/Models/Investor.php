<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use IsContactable;
    public $fillable = ['name','phone_number'];
    public $timestamps = true;

    public function scopeActive(){
        return $this->where('is_active','=',1);
    }
}
