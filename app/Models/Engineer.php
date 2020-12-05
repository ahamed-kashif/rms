<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    use IsContactable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone'];
}
