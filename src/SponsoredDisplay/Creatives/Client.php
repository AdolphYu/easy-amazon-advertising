<?php

namespace easyAmazonAdv\SponsoredDisplay\Creatives;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{

    public function getList(array $params)
    {
        return $this->httpGet('/sd/creatives', $params, false);
    }


    public function update(array $params)
    {
        return $this->httpPut('/sd/creatives', $params,[] ,false);
    }

    public function create(array $params)
    {
        return $this->httpPost('/sd/creatives', $params,[] ,false);
    }

    public function preview(array $params)
    {
        return $this->httpPost('/sd/creatives/preview', $params,[] ,false);
    }

    public function moderation(array $params)
    {
        return $this->httpGet('/sd/moderation/creatives', $params, false);
    }


}
