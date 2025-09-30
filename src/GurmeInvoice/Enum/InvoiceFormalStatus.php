<?php

namespace GurmeInvoice\Enum;

class InvoiceFormalStatus extends BaseEnum {

	public const PENDING     = 'pending';
	public const RUNNING     = 'running';
	public const COMPLETED   = 'completed';
	public const NOTREQUIRED = 'not_required';
	public const FAILED      = 'failed';
	public const CANCELED    = 'canceled';

	public static function alias( string $value ): string {
		$aliases = [
			self::PENDING     => 'Bekleniyor',
			self::RUNNING     => 'İşleniyor',
			self::COMPLETED   => 'Tamamlandı',
			self::NOTREQUIRED => 'İşlem Gerekmiyor',
			self::FAILED      => 'Hatalı',
			self::CANCELED    => 'İptal Edildi',
		];

		return $aliases[ $value ] ?? $value;
	}
}
