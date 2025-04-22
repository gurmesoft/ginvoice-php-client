<?php

namespace GurmeInvoice\Enum;

enum KDV: string
{
    case ZERO = '0';
    case ONE = '1';
    case EIGHT = '8';
    case TEN = '10';
    case EIGHTEEN = '18';
    case TWENTY = '20';

    public function alias(): string
    {
        return match ($this) {
            self::ZERO => '%0',
            self::ONE => '%1',
            self::EIGHT => '%8',
            self::TEN => '%10',
            self::EIGHTEEN => '%18',
            self::TWENTY => '%20',
        };
    }
}
