<?php

namespace Booni3\RedstagWms;

use Booni3\RedstagWms\Api\Auth;
use Booni3\RedstagWms\Api\Config;
use Booni3\RedstagWms\Api\Inventory;
use Booni3\RedstagWms\Api\Order;
use Booni3\RedstagWms\Api\Package;
use Booni3\RedstagWms\Api\Product;
use Booni3\RedstagWms\Api\Shipment;
use GuzzleHttp\Client as GuzzleClient;

class RedstagWms
{
    protected GuzzleClient $client;
    protected Config $config;
    protected ?string $bearer;

    public function __construct(Config $config, string $bearer = null, GuzzleClient $client = null)
    {
        $this->config = $config;
        $this->bearer = $bearer;
        $this->client = $client ?: $this->makeClient();
    }

    public static function make(Config $config, string $bearer = null, GuzzleClient $client = null): self
    {
        return new static ($config, $bearer, $client);
    }

    private function makeClient(): GuzzleClient
    {
        return new GuzzleClient([
            'base_uri' => $this->config->url,
            'timeout' => $this->config->timeout,
        ]);
    }

    public function auth(): Auth
    {
        return new Auth($this->client, $this->config);
    }

    public function login(string $bearer = null): self
    {
        $this->bearer = $bearer ?? $this->auth()->bearer();

        return $this;
    }

    public function products(): Product
    {
        return new Product($this->client, $this->config, $this->bearer);
    }

    public function orders(): Order
    {
        return new Order($this->client, $this->config, $this->bearer);
    }

    public function inventory(): Inventory
    {
        return new Inventory($this->client, $this->config, $this->bearer);
    }

    public function shipment(): Shipment
    {
        return new Shipment($this->client, $this->config, $this->bearer);
    }

    public function package(): Package
    {
        return new Package($this->client, $this->config, $this->bearer);
    }
}
