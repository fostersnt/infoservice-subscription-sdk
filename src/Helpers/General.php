<?php
namespace SubscriptionSdk\Helpers;

class General {
    public static function AppSettings()
    {
        return [
          "baseUrl" => "abcd.com/user/subscriptions",
          "subscription_endpoint" => "/subscribe",
        ];
    }
}