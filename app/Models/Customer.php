<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Customer extends Model implements HasMedia
{
    use Invoiceable,InteractsWithMedia, softDeletes;
//    protected $fillable = [ 'name', 'email', 'nid', 'phone','project_id'];

    protected $guarded = ['id','created_at','update_at'];
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
    public function getMediaByName($file_name){
        $medias = $this->getMedia();
        $media = $medias->where('file_name',$file_name)->first();
        return $media;
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
    public function total(){
        $invoices = $this->Invoice()->get();
        $total = 0;
        if(count($invoices) == 0){
            return 0;
        }
        foreach($invoices as $invoice) {
            if ($invoice->is_checkin) {
                $total = $total + $invoice->amount;
            } else {
                $total = $total - $invoice->amount;
            }
        }
        return $total;
    }
}
