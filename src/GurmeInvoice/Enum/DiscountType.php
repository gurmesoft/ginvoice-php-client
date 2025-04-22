<?php

namespace GurmeInvoice\Enum;

enum DiscountType: string
{
    case PERCENTAGE = 'percentage';
    case AMOUNT = 'amount';

    public function alias(): string
    {
        return match ($this) {
            self::PERCENTAGE => 'Yüzde',
            self::AMOUNT => 'Tutar',
        };
    }
}
