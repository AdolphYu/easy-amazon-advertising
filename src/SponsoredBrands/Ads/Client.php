<?php

namespace easyAmazonAdv\SponsoredBrands\Ads;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{

    public function delete(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/delete',$params,[],false, ['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function put(array $params = [])
    {
        return $this->httpPut('/sb/v4/ads', $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function productCollection(array $params)
    {
        return $this->httpPost('/sb/v4/ads/productCollection' , $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function list(array $params)
    {
        return $this->httpPost('/sb/v4/ads/list' , $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function video(array $params)
    {
        return $this->httpPost('/sb/v4/ads/video' , $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function brandVideo(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/brandVideo' , $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }


    public function storeSpotlight(array $params)
    {
        return $this->httpPost('/sb/v4/ads/storeSpotlight' , $params,[],false,['Accept' => 'application/vnd.sbadresource.v4+json']);
    }
}
