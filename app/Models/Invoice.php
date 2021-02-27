<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = true;
//    protected $dateFormat = 'd-m-Y';
    protected $casts = [
      'created_at' => 'datetime:d-m-Y',
      'updated_at' => 'datetime:d-m-Y'
    ];
    public function person(){
        return $this->morphTo(__FUNCTION__,'person_type','person_id');
    }
    public function PaymentMethod(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id','id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
    public function scopeNotChecked($q){
        return $q->where('is_checked','=',0);
    }
    public function balance(){
        return $this->belongsTo(Balance::class,'balance_id','id');
    }
}
