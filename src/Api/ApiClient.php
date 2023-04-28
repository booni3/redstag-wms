<?php


namespace Booni3\RedstagWms\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Response;

class ApiClient
{
    protected Client $client;
    protected Config $config;
    protected ?string $bearer = null;

    public function __construct(Client $client, Config $config, string $bearer = null)
    {
        $this->client = $client;
        $this->config = $config;
        $this->bearer = $bearer;
    }

    public function post($method, array $body = []): array
    {
        $response = $this->client->post('', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'json' => [
                "jsonrpc" => 2.0,
                "id" => $this->config->unique_id,
                "method" => 'call',
                "params" => [
                    $this->bearer,
                    $method,
                    $body
                ]
            ]
        ]);

        return $this->parse($response);
    }

    private function parse(Response $response): array
    {
        $array = json_decode((string) $response->getBody(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BadResponseException((string)$response->getBody());
        }

        if(isset($array['id']) && $array['id'] != $this->config->unique_id){
            throw new \Exception('Unique ID mismatch');
        }

        return $array['result'];
    }

}
