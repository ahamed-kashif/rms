<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    public function invoices(){
        return $this->belongsToMany(Material::class,'invoices_materials','material_id','invoice_id','material_id','id')->withPivot(['qty']);
    }
}
