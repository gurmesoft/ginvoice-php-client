<?php

namespace GurmeInvoice\Resource;

use GurmeInvoice\Resource\Invoice\Customer;
use GurmeInvoice\Resource\Invoice\Line;
use GurmeInvoice\Resource\Invoice\Shipment;

class Invoice extends Resource
{
    protected string $endpoint = 'invoices';
}
