<?php

namespace GurmeInvoice\Resource;

use GurmeInvoice\Resource\Invoice\Customer;
use GurmeInvoice\Resource\Invoice\Line;
use GurmeInvoice\Resource\Invoice\Shipment;

class Invoice
{
    protected int $saleChannelId;

    protected int $invoiceIntegrationId;

    protected string $type;

    protected string $orderId;

    protected string $orderDId;

    protected string $orderCreatedAt;

    protected string $currency;

    protected float $currencyRate;

    protected string $issueDate;

    protected string $issueTime;

    protected string $waybillNumber;

    protected string $waybillDate;

    protected bool $cashSale;

    protected string $dueDate;

    protected string $paymentDate;

    protected ?string $callbackUrl = null;

    protected Customer $customer;

    protected array $lines = [];

    protected bool $isInternetSale = false;

    protected array $internetSale = [];

    protected bool $isNeedShipment = false;

    protected ?Shipment $shipment = null;

    public function setSaleChannelId(int $value): void
    {
        $this->saleChannelId = $value;
    }

    public function getSaleChannelId(): int
    {
        return $this->saleChannelId;
    }

    public function setInvoiceIntegrationId(int $value): void
    {
        $this->invoiceIntegrationId = $value;
    }

    public function getInvoiceIntegrationId(): int
    {
        return $this->invoiceIntegrationId;
    }

    public function setType(string $value): void
    {
        $this->type = $value;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setOrderId(string $value): void
    {
        $this->orderId = $value;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderDId(string $value): void
    {
        $this->orderDId = $value;
    }

    public function getOrderDId(): string
    {
        return $this->orderDId;
    }

    public function setOrderCreatedAt(string $value): void
    {
        $this->orderCreatedAt = $value;
    }

    public function getOrderCreatedAt(): string
    {
        return $this->orderCreatedAt;
    }

    public function setCurrency(string $value): void
    {
        $this->currency = $value;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrencyRate(float $value): void
    {
        $this->currencyRate = $value;
    }

    public function getCurrencyRate(): float
    {
        return $this->currencyRate;
    }

    public function setIssueDate(string $value): void
    {
        $this->issueDate = $value;
    }

    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    public function setIssueTime(string $value): void
    {
        $this->issueTime = $value;
    }

    public function getIssueTime(): string
    {
        return $this->issueTime;
    }

    public function setWaybillNumber(string $value): void
    {
        $this->waybillNumber = $value;
    }

    public function getWaybillNumber(): string
    {
        return $this->waybillNumber;
    }

    public function setWaybillDate(string $value): void
    {
        $this->waybillDate = $value;
    }

    public function getWaybillDate(): string
    {
        return $this->waybillDate;
    }

    public function setCashSale(bool $value): void
    {
        $this->cashSale = $value;
    }

    public function getCashSale(): bool
    {
        return $this->cashSale;
    }

    public function setDueDate(string $value): void
    {
        $this->dueDate = $value;
    }

    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function setPaymentDate(string $value): void
    {
        $this->paymentDate = $value;
    }

    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    public function setCallbackUrl(?string $value): void
    {
        $this->callbackUrl = $value;
    }

    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function addLine(Line $line): void
    {
        $this->lines[] = $line;
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function setIsInternetSale(bool $value): void
    {
        $this->isInternetSale = $value;
    }

    public function getIsInternetSale(): bool
    {
        return $this->isInternetSale;
    }

    public function setInternetSale(array $value): void
    {
        $this->internetSale = $value;
    }

    public function getInternetSale(): array
    {
        return $this->internetSale;
    }

    public function setIsNeedShipment(bool $value): void
    {
        $this->isNeedShipment = $value;
    }

    public function getIsNeedShipment(): bool
    {
        return $this->isNeedShipment;
    }

    public function setShipment(Shipment $shipment): void
    {
        $this->shipment = $shipment;
    }

    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }

    public function toArray(): array
    {
        return [
            'sale_channel_id' => $this->saleChannelId,
            'invoice_integration_id' => $this->invoiceIntegrationId,
            'type' => $this->type,
            'order_id' => $this->orderId,
            'order_d_id' => $this->orderDId,
            'order_created_at' => $this->orderCreatedAt,
            'currency' => $this->currency,
            'currency_rate' => $this->currencyRate,
            'issue_date' => $this->issueDate,
            'issue_time' => $this->issueTime,
            'waybill_number' => $this->waybillNumber,
            'waybill_date' => $this->waybillDate,
            'cash_sale' => $this->cashSale,
            'due_date' => $this->dueDate,
            'payment_date' => $this->paymentDate,
            'callback_url' => $this->callbackUrl,
            'customer' => $this->customer->toArray(),
            'lines' => array_map(fn ($line) => $line->toArray(), $this->lines),
            'is_internet_sale' => $this->isInternetSale,
            'internet_sale' => $this->internetSale,
            'is_need_shipment' => $this->isNeedShipment,
            'shipment' => $this->shipment?->toArray(),
        ];
    }
}
