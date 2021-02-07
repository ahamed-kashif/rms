<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use IsContactable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone','project_id'];
    public function Project(){
        return $this->belongsTo(Project::class);
    }

}
