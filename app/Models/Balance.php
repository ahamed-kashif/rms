<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public $guarded = [];
    public $timestamps = true;
    public function invoices(){
        return $this->hasMany(Invoice::class,'balance_id','id');
    }
}
