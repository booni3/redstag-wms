<?php

namespace Booni3\RedstagWms\Api;

use Booni3\RedstagWms\Objects\OrderAddressObject;
use Booni3\RedstagWms\Objects\OrderInfoObject;
use Booni3\RedstagWms\Objects\OrderItemObject;

class Order extends ApiClient
{
    /**
     * @param string $orderId
     * @param null|string|array $fields https://docs.shipstream.io/ref/order.html#order_properties
     * @return array
     *
     * https://docs.shipstream.io/ref/order.html#orderinfo
     */
    public function find(string $orderUniqueId, null|string|array $fields = [])
    {
        return $this->post('order.info', [
            $orderUniqueId,
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
        return $this->post('order.search', [
            $filters,
            $options,
            $fields,
        ]);
    }

    /**
     * @param string|null $storeCode
     * @param array|OrderItemObject[] $items
     * @param OrderAddressObject $address
     * @param OrderInfoObject $info
     *
     * https://docs.shipstream.io/ref/order.html#ordercreate
     */
    public function create(string|null $storeCode, array $items, OrderAddressObject $address, OrderInfoObject $info)
    {
        return $this->post('order.create', [
            $storeCode,
            array_map(fn ($item) => $item->toArray(), $items),
            $address->toArray(),
            $info->toArray(),
        ]);
    }

    /**
     * @param string $uniqueOrderId
     * @param array $options
     * @param string|array|null $fields
     * @return array
     *
     * https://docs.shipstream.io/ref/order.html#ordercancel
     */
    public function cancelOrder(string $uniqueOrderId, array $options, null|string|array $fields = [])
    {
        return $this->post('order.cancel', [
            $uniqueOrderId,
            $options,
            $fields,
        ]);
    }
}
