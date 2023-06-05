<?php

namespace easyAmazonAdv\SponsoredDisplay\Creatives;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['creatives'] = function ($app) {
            return new Client($app);
        };
    }
}
