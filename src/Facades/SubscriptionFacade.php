<?php

namespace Subscription_Sdk\Facades;

use Illuminate\Support\Facades\Facade;
use Subscription_Sdk\src\MainSDK;

class SubscriptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MainSDK::class;
    }
}
