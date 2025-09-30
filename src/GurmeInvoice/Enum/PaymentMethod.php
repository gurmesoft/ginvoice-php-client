<?php

namespace GurmeInvoice\Enum;

class PaymentMethod extends BaseEnum
{
    public const KREDIBANKAKARTI = 'credit_or_debit';
    public const EFTHAVALE       = 'direct_transfer';
    public const KAPIDAODEME     = 'cash_on_delivery';
    public const ODEMEARACISI    = 'payment_agent';
    public const DIGER           = 'other';

    public static function alias(string $value): string
    {
        $aliases = [
            self::KREDIBANKAKARTI => 'Kredi/Banka Kartı',
            self::EFTHAVALE       => 'EFT/Havale',
            self::KAPIDAODEME     => 'Kapıda Ödeme',
            self::ODEMEARACISI    => 'Ödeme Aracısı',
            self::DIGER           => 'Diğer',
        ];

        return $aliases[$value] ?? $value;
    }
}