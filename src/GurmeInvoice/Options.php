<?php

namespace GurmeInvoice;

class Options {

	protected $apiKey;

	protected $env = Enum\Env::LIVE;

	public function getApiKey() {
		return $this->apiKey;
	}

	public function setApiKey( $apiKey ): self {
		$this->apiKey = $apiKey;

		return $this;
	}

	public function getEnv() {
		return $this->env;
	}

	public function setEnv( string $env ): self {
		$this->env = $env;

		return $this;
	}
}
