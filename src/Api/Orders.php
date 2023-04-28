<?php

namespace Booni3\RedstagWms\Api;

class Orders extends ApiClient
{
    public function getOrder($orderId, $options = ["status", "items"])
    {
        return $this->post('order.info', [
            $orderId,
            $options,
        ]);
    }
}
