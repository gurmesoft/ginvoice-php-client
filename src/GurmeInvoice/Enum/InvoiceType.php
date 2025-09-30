<?php

namespace GurmeInvoice\Enum;

class InvoiceType extends BaseEnum
{
    public const SATIS            = 'SATIS';
    public const IADE             = 'IADE';
    public const TEVKIFAT         = 'TEVKIFAT';
    public const TEVKIFATIADE     = 'TEVKIFATIADE';
    public const ISTISNA          = 'ISTISNA';
    public const OZELMATRAH       = 'OZELMATRAH';
    public const IHRACKAYITLI     = 'IHRACKAYITLI';
    public const KONAKLAMAVERGISI = 'KONAKLAMAVERGISI';

    public static function alias(string $value): string
    {
        $aliases = [
            self::SATIS            => 'Satış',
            self::IADE             => 'İade',
            self::TEVKIFAT         => 'Tevkifat',
            self::TEVKIFATIADE     => 'Tevkifat İade',
            self::ISTISNA          => 'İstisna',
            self::OZELMATRAH       => 'Özel Matrah',
            self::IHRACKAYITLI     => 'İhracat Kayıtlı',
            self::KONAKLAMAVERGISI => 'Konaklama Vergisi',
        ];

        return $aliases[$value] ?? $value;
    }
}