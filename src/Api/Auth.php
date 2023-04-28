<?php

namespace Booni3\RedstagWms\Api;

class Auth extends ApiClient
{
    public function getBearer(): string
    {
        $response = $this->client->post('', [
            'json' => [
                "jsonrpc" => 2.0,
                "id" => $this->config->unique_id,
                "method" => "login",
                "params" => [
                    $this->config->username,
                    $this->config->password
                ]
            ]
        ]);

        $array = json_decode($response->getBody(), true);

        return $array['result'] ?? throw new \Exception('Could not login');
    }
}
