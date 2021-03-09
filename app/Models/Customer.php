<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;

class Customer extends Model
{
    use Invoiceable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone','project_id'];
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }

    public function flats(){
        return $this->hasOne(Flat::class);
    }
    public function account(){
        $invoices = $this->Invoice()->get();
        //dd($this->flats()->first()->flat_amount);
        $balances = [];
        if(count($invoices) == 0 && $this->has('flats')){
            return 0;
        }
        $balance = $this->flats()->first()->flat_amount;
        foreach($invoices as $invoice) {
            if ($invoice->is_checkin) {
                $balance = $balance - $invoice->amount;
                $balances[$invoice->id] = $balance;
            } else {
                $balance = $balance + $invoice->amount;
                $balances[$invoice->id] = $balance;
            }
        }
        $account['invoices'] = $invoices;
        $account['balance'] = $balances;

        return $account;
    }
}
