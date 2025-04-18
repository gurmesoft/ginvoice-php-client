<?php

namespace GurmeInvoice\Resource;

use GurmeInvoice\Options;
use GurmeInvoice\Request;

abstract class Base
{
    public string $endpoint = '';

    protected Options $options;

    protected Request $request;

    public function __construct(Options $options)
    {
        $this->options = $options;
        $this->request = new Request($this->options);
    }

    public function store($data)
    {
        return $this->request->send('POST', $this->endpoint, $data);
    }

    public function update($data)
    {
        return $this->request->send('PATCH', $this->endpoint, $data);
    }

    public function delete()
    {
        return $this->request->send('DELETE', $this->endpoint);
    }

    public function show()
    {
        return $this->request->send('GET', $this->endpoint);
    }

    public function index()
    {
        return $this->request->send('GET', $this->endpoint);
    }
}
