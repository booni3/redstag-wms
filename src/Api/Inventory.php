<?php

namespace Booni3\RedstagWms\Api;

class Inventory extends ApiClient
{
    public function listInventories(string|array|null $skus = null, int|null $warehouseId = null, \DateTime|null $updatedSince = null)
    {
        return $this->post('inventory.list', [
            $skus,
            $warehouseId,
            $updatedSince instanceof \DateTime ? $updatedSince->format('c') : null,
        ]);
    }
}
