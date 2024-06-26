<?php

namespace easyAmazonAdv\BaseService\Common;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:58
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['common'] = function ($app) {
            return new Client($app);
        };
    }
}
