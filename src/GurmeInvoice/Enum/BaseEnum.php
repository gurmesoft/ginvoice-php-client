<?php

namespace GurmeInvoice\Enum;

abstract class BaseEnum {

	/**
	 * Tüm enum case'lerini döndürür
	 *
	 * @return array
	 */
	public static function cases(): array {
		$reflection = new \ReflectionClass( static::class );
		$constants  = $reflection->getConstants();
		return $constants;
	}

	/**
	 * Enum değerinin alias'ını döndürür
	 *
	 * @param string $value Enum değeri.
	 * @return string
	 */
	abstract public static function alias( string $value ): string;
}
