<?php

namespace App;

use App\Traits\Invoiceable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use Invoiceable;
    protected $guarded = ['id','created_at','update_at'];

    public function scopeActive($q){
        return $q->where('active',1);
    }
}
