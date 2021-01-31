<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['title'];
    public function invoices(){
        return $this->hasMany(Invoice::class,'payment_method_id','id');
    }
}
