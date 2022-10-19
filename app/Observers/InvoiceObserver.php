<?php

namespace App\Observers;

use Illuminate\Support\Facades\Artisan;

class InvoiceObserver
{
    public function created()
    {
        Artisan::call('account:generate');
    }
}
