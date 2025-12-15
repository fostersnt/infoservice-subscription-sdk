<?php
namespace Subscription_Sdk\src;

use Subscription_Sdk\src\Resources\Subscribe;

class MainSDK
{
    public function __construct(protected Client $client) {}

    public function payment(): Subscribe
    {
        return new Subscribe($this->client);
    }
}
