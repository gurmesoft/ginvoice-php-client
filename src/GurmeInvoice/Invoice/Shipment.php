<?php

namespace GurmeInvoice\Invoice;

class Shipment
{
    protected string $companyTitle;
    protected string $companyTaxNumber;
    protected string $courierName;
    protected string $courierTaxNumber;
    protected string $deliveryDate;

    public function setCompanyTitle(string $companyTitle): void
    {
        $this->companyTitle = $companyTitle;
    }
    public function getCompanyTitle(): string
    {
        return $this->companyTitle;
    }

    public function setCompanyTaxNumber(string $companyTaxNumber): void
    {
        $this->companyTaxNumber = $companyTaxNumber;
    }
    public function getCompanyTaxNumber(): string
    {
        return $this->companyTaxNumber;
    }

    public function setCourierName(string $courierName): void
    {
        $this->courierName = $courierName;
    }
    public function getCourierName(): string
    {
        return $this->courierName;
    }

    public function setCourierTaxNumber(string $courierTaxNumber): void
    {
        $this->courierTaxNumber = $courierTaxNumber;
    }
    public function getCourierTaxNumber(): string
    {
        return $this->courierTaxNumber;
    }

    public function setDeliveryDate(string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }

    public function toArray(): array
    {
        return [
            'company_title' => $this->companyTitle,
            'company_tax_number' => $this->companyTaxNumber,
            'courier_name' => $this->courierName,
            'courier_tax_number' => $this->courierTaxNumber,
            'delivery_date' => $this->deliveryDate
        ];
    }
}
