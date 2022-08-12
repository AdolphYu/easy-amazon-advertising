<?php

namespace easyAmazonAdv\BaseService\Common;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{

    /**
     * @description 获取推广商品列表
     * @param $params
     * @return array
     */
    public function productSelector($params)
    {
        return $this->httpPost('/product/metadata', $params, [], false);
    }

    /**
     * @description 获取竞价推荐
     * @param $params
     * @return array
     */
    public function bidRecommend($params)
    {
        return $this->httpPost('/sp/targets/bid/recommendations', $params, [], false);
    }

}
