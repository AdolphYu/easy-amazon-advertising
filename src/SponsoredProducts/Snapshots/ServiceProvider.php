<?php

namespace easyAmazonAdv\SponsoredProducts\Snapshots;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-14 19:49
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['snapshots'] = function ($app) {
            return new Client($app);
        };
    }
}
