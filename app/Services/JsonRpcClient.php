<?php namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class JsonRpcClient
{
    const JSON_RPC_VERSION = '2.0';

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'headers' => [
              'Content-Type' => 'application/json',
              'X-JsonRpc-Access-Key' => config('services.data.token')
            ],
        ]);
    }

    public function send(string $method, array $params = []): array
    {
        $response = $this->client
            ->post(config('services.data.uri'), [
                RequestOptions::JSON => [
                    'jsonrpc' => self::JSON_RPC_VERSION,
                    'id' => time(),
                    'method' => $method,
                    'params' => $params
                ]
            ])->getBody()->getContents();

        $data = json_decode($response, true);
        if (empty($data['result'])) abort(404);

        return $data['result'];
    }
}