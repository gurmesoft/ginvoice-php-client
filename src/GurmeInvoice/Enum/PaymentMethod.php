<?php

namespace GurmeInvoice\Enum;

enum PaymentMethod: string
{
    case KREDIBANKAKARTI = 'credit_or_debit';
    case EFTHAVALE = 'direct_transfer';
    case KAPIDAODEME = 'cash_on_delivery';
    case ODEMEARACISI = 'payment_agent';
    case DIGER = 'other';

    public function alias(): string
    {
        return match ($this) {
            self::KREDIBANKAKARTI => 'Kredi/Banka Kartı',
            self::EFTHAVALE => 'EFT/Havale',
            self::KAPIDAODEME => 'Kapıda Ödeme',
            self::ODEMEARACISI => 'Ödeme Aracısı',
            self::DIGER => 'Diğer',
        };
    }
}
