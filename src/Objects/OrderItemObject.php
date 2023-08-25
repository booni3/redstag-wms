<?php

namespace Booni3\RedstagWms\Objects;

class OrderItemObject extends AbstractObject
{
    public string $sku;

    public int $qty;
    public ?string $order_item_ref = null;
    public ?float $unit_declared_value = null;
    public ?string $unit_declared_value_currency = null;
    public ?float $unit_customs_value = null;
    public ?string $unit_customs_value_currency = null;
}
