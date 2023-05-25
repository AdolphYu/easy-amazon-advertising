<?php

namespace easyAmazonAdv\SponsoredBrands\AdCreatives;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{

    public function video(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/video',$params,[],false, ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json']);
    }


    public function list(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/list',$params,[],false, ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json']);
    }


    public function storeSpotlight(array $params)
    {
        return $this->httpPost('/sb/ads/creatives/storeSpotlight',$params,[],false, ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json']);
    }


    public function productCollection(array $params)
    {
        return $this->httpPost('/sb/ads/creatives/storeSpotlight',$params,[],false, ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json']);
    }


    public function brandVideo(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/brandVideo',$params,[],false, ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json']);
    }

    public function getAssetsSearch(array $params = []){
        return $this->httpPost('/assets/search/', $params, [],false);
    }

}
