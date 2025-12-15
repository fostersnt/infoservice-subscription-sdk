<?php
namespace SubscriptionSdk\src;

use SubscriptionSdk\Resources\Subscribe;

class MainSDK
{
    public function __construct(protected Client $client) {}

    public function payment(): Subscribe
    {
        return new Subscribe($this->client);
    }
}
