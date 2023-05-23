<?php

namespace easyAmazonAdv\SponsoredBrands\AdCreatives;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['ad_creatives'] = function ($app) {
            return new Client($app);
        };
    }
}
