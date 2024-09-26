<?php

namespace easyAmazonAdv\SponsoredProducts\Campaigns;

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
     * getCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function getCampaign(int $campaignId)
    {
        return $this->httpGet('/sp/campaigns/'.$campaignId);
    }

    /**
     * getCampaignEx.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function getCampaignEx(int $campaignId)
    {
        return $this->httpGet('/sp/campaigns/extended/'.$campaignId);
    }

    /**
     * createCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function createCampaigns($params)
    {
        return $this->httpPost('/sp/campaigns', $params);
    }

    /**
     * updateCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function updateCampaigns($params)
    {
        return $this->httpPut('/sp/campaigns', $params);
    }

    /**
     * archiveCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function archiveCampaign(int $campaignId)
    {
        return $this->httpDelete('/sp/campaigns/'.$campaignId);
    }

    /**
     * listCampaigns.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpGet('/sp/campaigns', $params);
    }

    /**
     * listCampaignsEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function listCampaignsEx(array $params = [])
    {
        return $this->httpGet('/sp/campaigns/extended', $params);
    }

    public function listCampaignV3(array $params)
    {
        return $this->httpPost("/sp/campaigns/list", $params,[],false, ['Accept' => 'application/vnd.spCampaign.v3+json','Content-Type' => 'application/vnd.spCampaign.v3+json']);
    }


    /**
     * createCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function createCampaignsV3($params)
    {
        return $this->httpPost('/sp/campaigns', $params, [], false, ['Accept' => 'application/vnd.spCampaign.v3+json','Content-Type' => 'application/vnd.spCampaign.v3+json']);
    }

    /**
     * updateCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function updateCampaignsV3($params)
    {
        return $this->httpPut('/sp/campaigns', $params, [], false, ['Accept' => 'application/vnd.spCampaign.v3+json','Content-Type' => 'application/vnd.spCampaign.v3+json']);
    }
}
