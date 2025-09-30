<?php

namespace GurmeInvoice\Enum;

class DiscountType extends BaseEnum {

	public const PERCENTAGE = 'percentage';
	public const AMOUNT     = 'amount';

	public static function alias( string $value ): string {
		$aliases = [
			self::PERCENTAGE => 'Yüzde',
			self::AMOUNT     => 'Tutar',
		];

		return $aliases[ $value ] ?? $value;
	}
}
