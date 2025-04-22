<?php

namespace GurmeInvoice\Enum;

enum CustomerType: string
{
    case COMPANY = 'company';
    case PERSON = 'person';

    public function alias(): string
    {
        return match ($this) {
            self::COMPANY => 'Tüzel Kişi',
            self::PERSON => 'Gerçek Kişi',
        };
    }
}
