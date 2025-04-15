<?php

namespace GurmeInvoice\Invoice;

class Line
{
    private int $id;
    private string $name;
    private string $description;
    private string $sku;
    private int $quantity;
    private string $unit;
    private float $unitPrice;
    private string $discountType;
    private float $discount;
    private float $taxRate;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }
    public function getSku(): string
    {
        return $this->sku;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }
    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function setDiscountType(string $discountType): void
    {
        $this->discountType = $discountType;
    }
    public function getDiscountType(): string
    {
        return $this->discountType;
    }

    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }
    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function setTaxRate(float $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'unit' => $this->unit,
            'unit_price' => $this->unitPrice,
            'discount_type' => $this->discountType,
            'discount' => $this->discount,
            'tax_rate' => $this->taxRate
        ];
    }
}
