<?php

namespace GurmeInvoice\Enum;

class CustomerType extends BaseEnum {

	public const COMPANY = 'company';
	public const PERSON  = 'person';

	public static function alias( string $value ): string {
		$aliases = [
			self::COMPANY => 'Tüzel Kişi',
			self::PERSON  => 'Gerçek Kişi',
		];

		return $aliases[ $value ] ?? $value;
	}
}
