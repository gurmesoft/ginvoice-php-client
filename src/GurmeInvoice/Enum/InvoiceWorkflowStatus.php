<?php

namespace GurmeInvoice\Enum;

class InvoiceWorkflowStatus extends BaseEnum
{
    public const PROCESSING = 'processing';
    public const FAILED     = 'failed';
    public const COMPLETED  = 'completed';

    public static function alias(string $value): string
    {
        $aliases = [
            self::PROCESSING => 'Devam Ediyor',
            self::FAILED     => 'Hatalı',
            self::COMPLETED  => 'Başarılı',
        ];

        return $aliases[$value] ?? $value;
    }
}