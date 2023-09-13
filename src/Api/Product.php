<?php

namespace Booni3\RedstagWms\Api;

class Product extends ApiClient
{
    /**
     * @param array|null $filters https://docs.shipstream.io/doc/search-filters.html
     * @param array|null $options https://docs.shipstream.io/doc/search-options.html
     * @return array
     *
     * https://docs.shipstream.io/ref/product.html#product_search
     */
    public function getProducts(null|array $filters = null, null|array $options = null)
    {
        return $this->post('product.search', [
            $filters,
            $options,
        ]);
    }
}
