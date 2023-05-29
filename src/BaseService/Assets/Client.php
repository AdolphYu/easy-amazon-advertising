<?php

namespace easyAmazonAdv\BaseService\Assets;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{

    public function assets(array $params = []){
        return $this->httpGet('/assets/', $params,false);
    }

    public function register(array $params = []){
        return $this->httpPost('/assets/register', $params, [],false, ['Content-Type' => 'text/plain']);
    }

    public function upload(array $params = []){
        return $this->httpPost('/assets/upload', $params, [],false);
    }


    public function getAssetsSearch(array $params = []){
        return $this->httpPost('/assets/search/', $params, [],false);
    }

    public function preModeration(array $params = []){
        return $this->httpPost('/preModeration', $params, [],false);
    }
}
