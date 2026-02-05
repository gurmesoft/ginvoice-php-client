<?php

namespace GurmeInvoice;

class Helper {

	protected Options $options;

	protected Request $request;

	public function __construct( Options $options ) {
		$this->options = $options;
		$this->request = new Request( $this->options );
	}

	public function checkConnection() {
		return $this->request->send( 'POST', 'check/auth' );
	}

	/**
	 * @param array $data ['address' => 'string', 'full_name' => 'string']
	 */
	public function fixAddress( $data ) {
		return $this->request->send( 'POST', 'fix-address', $data );
	}

	public function saveSettingsWebhook( $data ) {
		return $this->request->send( 'POST', 'helpers/settings-webhook', $data );
	}
}
