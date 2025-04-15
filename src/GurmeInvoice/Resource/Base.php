<?php

namespace GurmeInvoice\Resource;

use GurmeInvoice\Options;
use GurmeInvoice\Request;

abstract class Base
{
    protected $endpoint = '';

    protected Options $options;

    protected Request $request;

    public function __construct(Options $options)
    {
        $this->options = $options;
        $this->request = new Request($this->options);
    }

    public function store($data)
    {
        $this->request->send('POST', $this->endpoint, $data);
    }

    public function update($data)
    {
        $this->request->send('PATCH', $this->endpoint, $data);
    }

    public function delete()
    {
        $this->request->send('DELETE', $this->endpoint);
    }

    public function show()
    {
        $this->request->send('GET', $this->endpoint);
    }

    public function index()
    {
        $this->request->send('GET', $this->endpoint);
    }
}
