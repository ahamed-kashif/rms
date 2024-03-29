<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use IsContactable;
//    protected $fillable = [ 'flat_number', 'email', 'nid', 'phone','project_id'];
    protected $guarded = ['id','created_at','update_at'];
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }


}
