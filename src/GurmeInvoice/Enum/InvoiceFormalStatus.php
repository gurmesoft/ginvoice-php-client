<?php

namespace GurmeInvoice\Enum;

enum InvoiceFormalStatus: string
{
    case PENDING = 'pending';
    case RUNNING = 'running';
    case COMPLETED = 'completed';
    case NOTREQUIRED = 'not_required';
    case FAILED = 'failed';
    case CANCELED = 'canceled';

    public function alias(): string
    {
        return match ($this) {
            self::PENDING => 'Bekleniyor',
            self::RUNNING => 'İşleniyor',
            self::COMPLETED => 'Tamamlandı',
            self::NOTREQUIRED => 'İşlem Gerekmiyor',
            self::FAILED => 'Hatalı',
            self::CANCELED => 'İptal Edildi',
        };
    }
}
