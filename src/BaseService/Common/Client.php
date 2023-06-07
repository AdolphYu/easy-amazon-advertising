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

    /**
     * @description 获取关键词推荐
     * @param $params
     * @return array
     */
    public function keywordRecommend($params)
    {
        return $this->httpPost('/sp/targets/keywords/recommendations', $params, [], false, ['Content-Type' => 'application/vnd.spkeywordsrecommendation.v5+json']);
    }


    public function historyChange($params)
    {
        return $this->httpPost('/history', $params, [], false);
    }



    /**
     * @description invoice
     * @param $params
     * @return array
     */
    public function invoice($params)
    {
        return $this->httpGet('/invoice', $params,false);
    }

    public function audiences(array $params = [])
    {
        return $this->httpPost('/audiences/list', $params, [],false);
    }

    public function taxonomy(array $params = [])
    {
        return $this->httpPost('/audiences/taxonomy/list', $params, [],false);
    }

}
