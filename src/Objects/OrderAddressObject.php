<?php

namespace Booni3\RedstagWms\Objects;

/**
 * https://docs.shipstream.io/ref/order.html#address_properties
 */
class OrderAddressObject extends AbstractObject
{
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $company = null;
    public ?string $street = null;
    public ?string $city = null;
    public ?string $region = null;
    public ?string $postcode = null;
    public ?string $country = null;
    public ?string $classification = null;
    public ?bool $is_valid = null;
    public ?string $telephone = null;
    public ?string $email = null;
}
