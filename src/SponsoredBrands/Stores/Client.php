<?php

namespace easyAmazonAdv\SponsoredBrands\Stores;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{

    public function getStoresAssets($params = [])
    {
        return $this->httpGet('/stores/assets', $params,false);
    }


    public function createStoresAssets($params = []){
        return $this->httpPost('/stores/assets', $params, [],false);
    }

    public function listStores($params = []){
        return $this->httpGet('/v2/stores', $params,false);
    }

}
