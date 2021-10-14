<?php

namespace Soap\Laracash;

use Soap\Invoices\Traits\HasInvoice;

trait Billable 
{
    use HasInvoice; // enables the ->invoices() Eloquent relationship

    public function invoiceFor()
    {
        
    }
}