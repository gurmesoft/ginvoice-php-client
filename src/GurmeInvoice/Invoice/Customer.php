<?php

namespace GurmeInvoice\Invoice;

class Customer
{
    protected int $id;
    protected string $type;
    protected string $taxNumber;
    protected string $taxOffice;
    protected string $title;
    protected string $name;
    protected string $surname;
    protected string $phone;
    protected string $email;
    protected string $address;
    protected string $district;
    protected string $city;
    protected string $country;
    protected string $postcode;
    protected string $iban;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
    public function getType(): string
    {
        return $this->type;
    }

    public function setTaxNumber(string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }
    public function getTaxNumber(): string
    {
        return $this->taxNumber;
    }

    public function setTaxOffice(string $taxOffice): void
    {
        $this->taxOffice = $taxOffice;
    }
    public function getTaxOffice(): string
    {
        return $this->taxOffice;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }
    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }
    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }
    public function getCity(): string
    {
        return $this->city;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
    public function getCountry(): string
    {
        return $this->country;
    }

    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }
    public function getIban(): string
    {
        return $this->iban;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'tax_number' => $this->taxNumber,
            'tax_office' => $this->taxOffice,
            'title' => $this->title,
            'name' => $this->name,
            'surname' => $this->surname,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'district' => $this->district,
            'city' => $this->city,
            'country' => $this->country,
            'postcode' => $this->postcode,
            'iban' => $this->iban
        ];
    }
}
