<?php

namespace GurmeInvoice;

class Options
{
    protected $apiKey;

    protected $env = Enum\Env::LIVE;

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getEnv()
    {
        return $this->env;
    }

    public function setEnv(Enum\Env $env)
    {
        $this->env = $env;
    }
}
