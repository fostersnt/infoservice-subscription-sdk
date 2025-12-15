<?php
namespace SubscriptionSdk\Resources;

use SubscriptionSdk\Helpers\General;
use SubscriptionSdk\src\Client;

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
