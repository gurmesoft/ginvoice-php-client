<?php

namespace GurmeInvoice\Resource\Invoice;

class InternetSale
{
    private string $webAddress;

    private string $paymentMethod;

    private string $paymentPlatform;

    private string $paymentDate;

    public function setWebAddress(string $webAddress): void
    {
        $this->webAddress = $webAddress;
    }

    public function getWebAddress(): string
    {
        return $this->webAddress;
    }

    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    public function setPaymentPlatform(string $paymentPlatform): void
    {
        $this->paymentPlatform = $paymentPlatform;
    }

    public function getPaymentPlatform(): string
    {
        return $this->paymentPlatform;
    }

    public function setPaymentDate(string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    public function toArray(): array
    {
        return [
            'web_address' => $this->webAddress,
            'payment_method' => $this->paymentMethod,
            'payment_platform' => $this->paymentPlatform,
            'payment_date' => $this->paymentDate,
        ];
    }
}
