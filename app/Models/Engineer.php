<?php

namespace App\Models;

use App\Traits\IsContactable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Invoiceable;

class Engineer extends Model
{
    use IsContactable;
    use Invoiceable;
    protected $fillable = [ 'name', 'email', 'nid', 'phone'];
}
