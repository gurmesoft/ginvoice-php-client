<?php

namespace GurmeInvoice\Enum;

enum InvoiceWorkflowStatus: string
{
    case PROCESSING = 'processing';
    case FAILED = 'failed';
    case COMPLETED = 'completed';

    public function alias(): string
    {
        return match ($this) {
            self::PROCESSING => 'Devam Ediyor',
            self::FAILED => 'Hatalı',
            self::COMPLETED => 'Başarılı',
        };
    }
}
