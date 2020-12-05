<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use IsContactable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone','material','is_active' ];
}
