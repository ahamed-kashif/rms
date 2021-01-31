<?php
namespace App\Traits;

use App\Models\Invoice;

trait Invoiceable{
    public function Invoice(){
        return $this->morphOne(Invoice::class,'person');
    }
}
