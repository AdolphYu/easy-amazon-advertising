<?php

namespace easyAmazonAdv\SponsoredBrands\Groups;

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
     * listAdGroups.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function listAdGroups(array $params = [])
    {
        return $this->httpPost('/sb/v4/adGroups/list', $params, [], false, ['Accept' => 'application/vnd.sbadgroupresource.v4+json']);
    }

    /**
     * @description 创建广告组
     * @param array $params
     * @return array
     */
    public function createGroups(array $params){
        return $this->httpPost('/sb/v4/adGroups', $params, [], false, ['Accept' => 'application/vnd.sbadgroupresource.v4+json']);
    }

    /**
     * @description 修改广告组
     * @param array $params
     * @return array
     */
    public function updateGroups(array $params){
        return $this->httpPut('/sb/v4/adGroups', $params, [], false, ['Accept' => 'application/vnd.sbadgroupresource.v4+json']);
    }


    /**
     * @description 删除广告组
     * @param array $params
     * @return array
     */
    public function deleteGroups(array $params){
        return $this->httpPost('/sb/v4/adGroups/delete', $params, [], false, ['Accept' => 'application/vnd.sbadgroupresource.v4+json']);
    }

}
