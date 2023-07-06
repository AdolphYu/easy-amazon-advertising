<?php

namespace easyAmazonAdv\BaseService\Account;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{

    public function updateAccountBudgets($params)
    {
        return $this->httpPost('/accountBudgets/featureFlags', $params, [], false);
    }


    public function getAccountBudgets($params)
    {
        return $this->httpGet('/accountBudgets/featureFlags', $params,false);
    }


}
