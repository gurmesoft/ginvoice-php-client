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

    public function formalizeInvoice($id)
    {
        return $this->request->send('GET', "formalize/{$id}");
    }

    public function formalPDF($id)
    {
        return $this->request->send('GET', "formal-pdf/{$id}");
    }
}
