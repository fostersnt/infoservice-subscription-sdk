<?php
namespace Subscription_Sdk\src;

use Illuminate\Support\ServiceProvider;
use SubscriptionSdk\Resources\Subscribe;
use Subscription_Sdk\src\Client;
use Subscription_Sdk\src\MainSDK;

class SubscriptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/subscription.php',
            'subscription'
        );

        $this->app->singleton(Client::class, function () {
            return new Client(config('your-sdk.api_key'));
        });

        $this->app->singleton('subscription-sdk', function ($app) {
            return new MainSDK($app->make(Client::class));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/subscription.php' => config_path('subscription.php'),
        ], 'config');
    }
}
