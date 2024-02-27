<?php

namespace easyAmazonAdv\SponsoredBrands\Moderation;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{

    public function moderation($params = [])
    {
        return $this->httpPost('/moderation/results', $params, [],false, ['Content-Type' => 'application/vnd.moderationresultsrequest.v4.1+json']);
    }

}
