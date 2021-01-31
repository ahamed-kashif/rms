<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use IsContactable;
    protected $fillable = [ 'flat_number', 'email', 'nid', 'phone','project_id'];

    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
