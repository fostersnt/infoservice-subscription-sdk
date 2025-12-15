<?php
namespace Subscription_Sdk\Helpers;

class General {
    public static function AppSettings()
    {
        return [
          "baseUrl" => "abcd.com/user/subscriptions",
          "subscription_endpoint" => "/subscribe",
        ];
    }
}