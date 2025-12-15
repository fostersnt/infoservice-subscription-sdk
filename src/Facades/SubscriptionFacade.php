<?php

namespace Hp\SubscriptionSdk\Facades;

use Illuminate\Support\Facades\Facade;
use SubscriptionSdk\src\MainSDK;

class SubscriptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MainSDK::class;
    }
}
