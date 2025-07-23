<?php

namespace GurmeInvoice;

class Helper
{
    protected Options $options;

    protected Request $request;

    public function __construct(Options $options)
    {
        $this->options = $options;
        $this->request = new Request($this->options);
    }

    public function checkConnection()
    {
        return $this->request->send('POST', 'check/auth');
    }

    public function fixAddress($address)
    {
        return $this->request->send('POST', 'fix-address', ['address' => $address]);
    }
}
