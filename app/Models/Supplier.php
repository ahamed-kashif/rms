<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = [ 'name', 'email', 'nid', 'phone','material','is_active' ];
}
