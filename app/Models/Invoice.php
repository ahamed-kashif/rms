<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function person(){
        return $this->morphTo(__FUNCTION__,'person_type','person_id');
    }
    public function PaymentMethod(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id','id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
