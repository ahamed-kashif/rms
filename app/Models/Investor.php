<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;

class Investor extends Model
{
    use IsContactable;
    use Invoiceable;
    public $fillable = ['name','phone_number'];
    public $timestamps = true;

    public function scopeActive(){
        return $this->where('is_active','=',1);
    }
}
