<?php

namespace easyAmazonAdv\SponsoredProducts\Snapshots;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * requestReport.
     *
     * @param string $recordType
     * @param array  $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 16:23
     */
    public function requestSnapshot(string $recordType, array $params)
    {
        return $this->httpPost("/sp/{$recordType}/snapshot", $params);
    }

    /**
     * getReport.
     *
     * @param string $snapshotId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 16:23
     */
    public function getSnapshot(string $snapshotId)
    {
        return $this->httpGet("/sp/snapshots/{$snapshotId}");
    }

    /**
     * downloadReportData.
     *
     * @param string $snapshotId
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:45
     */
    public function downloadSnapshotData(string $snapshotId, $params)
    {
        return $this->httpGet("/sp/snapshots/{$snapshotId}/download", $params);
    }
}
