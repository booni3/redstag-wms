<?php

namespace Booni3\RedstagWms\Objects;

/**
 * https://docs.shipstream.io/ref/order.html#order_additional_data
 */
class OrderInfoObject extends AbstractObject
{
    public ?string $unique_id = null;
    public ?string $order_ref = null;
    public ?string $shipping_method = null;
    public ?string $custom_greeting = null;
    public ?string $note = null;
    public ?string $signature_required = null;
    public ?bool $saturday_delivery = null;
    public ?string $reason_for_export = null;
    public ?string $declared_value_service = null;
    public ?string $declared_value = null;
    public ?string $declared_value_currency = null;
    public ?string $customs_value = null;
    public ?string $customs_value_currency = null;
    public ?string $overbox = null;
    public ?string $backorder_policy = null;
    public ?string $all_or_nothing = null;
    public ?string $as_available = null;
    public ?string $up_to_X = null;
    public ?string $priority = null;
    public ?string $requested_ship_date = null;
    public ?string $desired_delivery_date = null;
    public ?string $delayed_ship_date = null;
    public ?string $hold_indefinitely = null;
    public ?string $tpb_group_id = null;
    public ?string $duties_payor = null;
    public ?string $duties_tpb_group_id = null;
    public ?string $instructions = null;
    public ?string $generate_sscc = null;
    public ?array $custom_fields = null;
}
