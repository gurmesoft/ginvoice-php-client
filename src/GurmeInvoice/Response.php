<?php

namespace GurmeInvoice;

class Response {

	private $response;

	private $code;

	private $array = [];

	public function __construct( $response, $code ) {
		$this->response = $response;
		$this->code     = $code;
	}

	public function status() {
		return $this->code;
	}

	public function body() {
		return $this->response;
	}

	public function toArray( $key = false ) {
		$this->array = json_decode( $this->response, true ) ?: [];

		if ( ! $key ) {
			return $this->array;
		}

		if ( array_key_exists( $key, $this->array ) ) {
			return $this->array[ $key ];
		}

		return false;
	}

	public function json() {
		return json_decode( $this->response ) ?: false;
	}

	public function success() {
		return $this->code >= 200 && $this->code < 300;
	}

	public function errorMessage() {
		return $this->toArray( 'message' );
	}
}
