<?php


namespace App\Helpers;


use App\Models\Invoice;

class InvoiceSession
{
    public $invoice;
    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

}
