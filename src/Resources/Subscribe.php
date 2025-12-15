<?php
namespace Subscription_Sdk\src\Resources;

use Subscription_Sdk\Helpers\General;
use Subscription_Sdk\src\Client;

class Subscribe
{
    public function __construct(protected Client $client) {}

    public function charge(int $amount)
    {
        $endpoint = General::AppSettings()['subscription_endpoint'];
        return $this->client->api_request(
            'post',
            $endpoint,
            ['amount' => $amount]
        );
    }
}
