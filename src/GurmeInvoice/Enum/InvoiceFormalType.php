<?php

namespace GurmeInvoice\Enum;

class InvoiceFormalType extends BaseEnum {

	public const EARCHIVE = 'e_archive';
	public const EINVOICE = 'e_invoice';

	public static function alias( string $value ): string {
		$aliases = [
			self::EARCHIVE => 'E-Arşiv',
			self::EINVOICE => 'E-Fatura',
		];

		return $aliases[ $value ] ?? $value;
	}
}
