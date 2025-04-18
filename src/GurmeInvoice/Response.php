<?php

namespace GurmeInvoice;

class Response
{
    private $response;

    private $code;

    private $array = [];

    private $error = false;

    public function __construct($response, $code)
    {
        $this->response = $response;
        $this->code = $code;
        $this->convertToArray();

        if (! $this->success()) {
            $this->prepareError();
        }
    }

    public function status()
    {
        return $this->code;
    }

    public function body()
    {
        return $this->response;
    }

    public function toArray($key = false)
    {
        if (! $key) {
            return $this->array;
        }

        if (array_key_exists($key, $this->array)) {
            return $this->array[$key];
        }

        return false;
    }

    public function success()
    {
        return $this->code >= 200 && $this->code < 300;
    }

    public function errorMessage()
    {
        return $this->error;
    }

    private function prepareError()
    {
        $this->error = $this->toArray('message');
    }

    private function convertToArray()
    {
        $this->array = json_decode($this->response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->array = [];
        }
    }
}
