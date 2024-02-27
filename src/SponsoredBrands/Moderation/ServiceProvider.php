<?php

namespace easyAmazonAdv\SponsoredBrands\Moderation;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['moderation'] = function ($app) {
            return new Client($app);
        };
    }
}
