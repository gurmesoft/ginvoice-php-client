<?php

namespace GurmeInvoice\Enum;

enum InvoiceFormalType: string
{
    case EARCHIVE = 'e_archive';
    case EINVOICE = 'e_invoice';

    public function alias(): string
    {
        return match ($this) {
            self::EARCHIVE => 'E-Arşiv',
            self::EINVOICE => 'E-Fatura',
        };
    }
}
