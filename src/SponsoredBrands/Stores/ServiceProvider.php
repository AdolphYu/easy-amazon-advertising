<?php

namespace easyAmazonAdv\SponsoredBrands\Stores;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['stores'] = function ($app) {
            return new Client($app);
        };
    }
}
