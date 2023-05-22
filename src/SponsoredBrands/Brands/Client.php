<?php

namespace easyAmazonAdv\SponsoredBrands\Brands;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    /**
     * @description 授权品牌
     * @param array $params
     * @return array
     */
    public function brands($params = [])
    {
        return $this->httpGet('/brands', $params,false);
    }

    /**
     * @description 基准品牌列表
     * @param array $params
     * @return array
     */
    public function benchmarksBrandsList($params = []){
        return $this->httpGet('/benchmarks/brands', $params,false);
    }

}
