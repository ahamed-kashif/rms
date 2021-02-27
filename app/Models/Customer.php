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
        return $this->hasMany(Flat::class);
    }

}
