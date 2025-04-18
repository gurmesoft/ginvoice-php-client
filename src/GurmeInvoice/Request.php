<?php

namespace GurmeInvoice;

class Request
{
    protected $options;

    public function __construct(Options $options)
    {
        $this->options = $options;
    }

    public function send($method, $endpoint, $data = []): Response
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl($endpoint));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return new Response($response, $code);
    }

    protected function getUrl($endpoint)
    {
        $domain = $this->options->getEnv()->value === 'live' ? 'app' : 'staging';

        return "https://{$domain}.faturaentegrator.com/api/{$endpoint}";
    }

    protected function getHeaders()
    {
        return [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $this->options->getApiKey(),
        ];
    }
}
