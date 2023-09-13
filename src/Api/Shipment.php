<?php

namespace Booni3\RedstagWms\Api;

class Shipment extends ApiClient
{
    /**
     * @param string $shipment
     * @param null|string|array $fields https://docs.shipstream.io/ref/order.html#order_properties
     * @return array
     *
     * https://docs.shipstream.io/ref/shipment.html#orderinfo
     */
    public function find(string $shipment, null|string|array $fields = [])
    {
        return $this->post('shipment.info', [
            $shipment,
            $fields,
        ]);
    }

    /**
     * @param null|array $filters https://docs.shipstream.io/doc/search-filters.html
     * @param null|array $options https://docs.shipstream.io/doc/search-options.html
     * @param null|string|array $fields https://docs.shipstream.io/ref/order.html#order_properties
     * @return array
     *
     * https://docs.shipstream.io/ref/order.html#ordersearch
     */
    public function search(null|array $filters, null|array $options = [], null|string|array $fields = [])
    {
        return $this->post('shipment.search', [
            $filters,
            $options,
            $fields,
        ]);
    }
}
