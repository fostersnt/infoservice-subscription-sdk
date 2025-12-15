<?php
namespace Subscription_Sdk\src;

use Illuminate\Support\Facades\Http;
use Subscription_Sdk\Helpers\General;

class Client
{
    protected string $apiKey;
    protected string $baseUrl;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = General::AppSettings()['baseUrl'];
    }

    public function api_request(string $method, string $uri, array $data = [])
    {
        return Http::withToken($this->apiKey)
            ->acceptJson()
            ->$method($this->baseUrl . $uri, $data)
            ->json();
    }
}
