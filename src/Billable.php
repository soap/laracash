<?php

namespace Soap\Laracash;

use NeptuneSoftware\Invoice\Traits\HasInvoice;

trait Billable 
{
    use HasInvoice; // enables the ->invoices() Eloquent relationship

    public function invoiceFor()
    {
        
    }
}