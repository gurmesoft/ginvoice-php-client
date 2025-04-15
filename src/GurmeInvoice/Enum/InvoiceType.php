<?php

namespace GurmeInvoice\Enum;

enum InvoiceType: string
{
    case SATIS = 'SATIS';
    case IADE = 'IADE';
    case TEVKIFAT = 'TEVKIFAT';
    case TEVKIFATIADE = 'TEVKIFATIADE';
    case ISTISNA = 'ISTISNA';
    case OZELMATRAH = 'OZELMATRAH';
    case IHRACKAYITLI = 'IHRACKAYITLI';
    case KONAKLAMAVERGISI = 'KONAKLAMAVERGISI';

    public function alias(): string
    {
        return match ($this) {
            self::SATIS => 'Satış',
            self::IADE => 'İade',
            self::TEVKIFAT => 'Tevkifat',
            self::TEVKIFATIADE => 'Tevkifat İade',
            self::ISTISNA => 'İstisna',
            self::OZELMATRAH => 'Özel Matrah',
            self::IHRACKAYITLI => 'İhracat Kayıtlı',
            self::KONAKLAMAVERGISI => 'Konaklama Vergisi',
        };
    }
}
