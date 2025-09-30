<?php

namespace GurmeInvoice\Enum;

class KDV extends BaseEnum {

	public const ZERO     = '0';
	public const ONE      = '1';
	public const EIGHT    = '8';
	public const TEN      = '10';
	public const EIGHTEEN = '18';
	public const TWENTY   = '20';

	public static function alias( string $value ): string {
		$aliases = [
			self::ZERO     => '%0',
			self::ONE      => '%1',
			self::EIGHT    => '%8',
			self::TEN      => '%10',
			self::EIGHTEEN => '%18',
			self::TWENTY   => '%20',
		];

		return $aliases[ $value ] ?? $value;
	}
}
