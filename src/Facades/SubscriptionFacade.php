<?php

namespace Subscription_Sdk\src\Facades;

use Illuminate\Support\Facades\Facade;

class SubscriptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'subscription-sdk';
    }
}
