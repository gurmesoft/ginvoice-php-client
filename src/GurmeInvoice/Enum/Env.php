<?php

namespace GurmeInvoice\Enum;

class Env extends BaseEnum {

	public const LIVE = 'live';
	public const TEST = 'test';

	public static function alias( string $value ): string {
		return $value;
	}
}
