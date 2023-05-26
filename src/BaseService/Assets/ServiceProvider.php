<?php

namespace easyAmazonAdv\BaseService\Assets;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:59
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['assets'] = function ($app) {
            return new Client($app);
        };
    }
}
