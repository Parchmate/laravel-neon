<?php

namespace Vendor\Library\Generated\Model;

class ConsumptionHistoryPerTimeframe extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The specified start date-time for the reported consumption.
     *
     * @var \DateTime
     */
    protected $timeframeStart;
    /**
     * The specified end date-time for the reported consumption.
     *
     * @var \DateTime
     */
    protected $timeframeEnd;
    /**
     * Seconds. The amount of time the compute endpoints have been active.
     *
     * @var int
     */
    protected $activeTimeSeconds;
    /**
     * Seconds. The number of CPU seconds used by compute endpoints, including compute endpoints that have been deleted.
     *
     * @var int
     */
    protected $computeTimeSeconds;
    /**
     * Bytes. The amount of written data for all branches.
     *
     * @var int
     */
    protected $writtenDataBytes;
    /**
     * Bytes. The space occupied in storage. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches.
     *
     * @var int
     */
    protected $syntheticStorageSizeBytes;
    /**
     * Bytes-Hour. The amount of storage consumed hourly.
     *
     * @var int
     */
    protected $dataStorageBytesHour;
    /**
     * The specified start date-time for the reported consumption.
     *
     * @return \DateTime
     */
    public function getTimeframeStart(): \DateTime
    {
        return $this->timeframeStart;
    }
    /**
     * The specified start date-time for the reported consumption.
     *
     * @param \DateTime $timeframeStart
     *
     * @return self
     */
    public function setTimeframeStart(\DateTime $timeframeStart): self
    {
        $this->initialized['timeframeStart'] = true;
        $this->timeframeStart = $timeframeStart;
        return $this;
    }
    /**
     * The specified end date-time for the reported consumption.
     *
     * @return \DateTime
     */
    public function getTimeframeEnd(): \DateTime
    {
        return $this->timeframeEnd;
    }
    /**
     * The specified end date-time for the reported consumption.
     *
     * @param \DateTime $timeframeEnd
     *
     * @return self
     */
    public function setTimeframeEnd(\DateTime $timeframeEnd): self
    {
        $this->initialized['timeframeEnd'] = true;
        $this->timeframeEnd = $timeframeEnd;
        return $this;
    }
    /**
     * Seconds. The amount of time the compute endpoints have been active.
     *
     * @return int
     */
    public function getActiveTimeSeconds(): int
    {
        return $this->activeTimeSeconds;
    }
    /**
     * Seconds. The amount of time the compute endpoints have been active.
     *
     * @param int $activeTimeSeconds
     *
     * @return self
     */
    public function setActiveTimeSeconds(int $activeTimeSeconds): self
    {
        $this->initialized['activeTimeSeconds'] = true;
        $this->activeTimeSeconds = $activeTimeSeconds;
        return $this;
    }
    /**
     * Seconds. The number of CPU seconds used by compute endpoints, including compute endpoints that have been deleted.
     *
     * @return int
     */
    public function getComputeTimeSeconds(): int
    {
        return $this->computeTimeSeconds;
    }
    /**
     * Seconds. The number of CPU seconds used by compute endpoints, including compute endpoints that have been deleted.
     *
     * @param int $computeTimeSeconds
     *
     * @return self
     */
    public function setComputeTimeSeconds(int $computeTimeSeconds): self
    {
        $this->initialized['computeTimeSeconds'] = true;
        $this->computeTimeSeconds = $computeTimeSeconds;
        return $this;
    }
    /**
     * Bytes. The amount of written data for all branches.
     *
     * @return int
     */
    public function getWrittenDataBytes(): int
    {
        return $this->writtenDataBytes;
    }
    /**
     * Bytes. The amount of written data for all branches.
     *
     * @param int $writtenDataBytes
     *
     * @return self
     */
    public function setWrittenDataBytes(int $writtenDataBytes): self
    {
        $this->initialized['writtenDataBytes'] = true;
        $this->writtenDataBytes = $writtenDataBytes;
        return $this;
    }
    /**
     * Bytes. The space occupied in storage. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches.
     *
     * @return int
     */
    public function getSyntheticStorageSizeBytes(): int
    {
        return $this->syntheticStorageSizeBytes;
    }
    /**
     * Bytes. The space occupied in storage. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches.
     *
     * @param int $syntheticStorageSizeBytes
     *
     * @return self
     */
    public function setSyntheticStorageSizeBytes(int $syntheticStorageSizeBytes): self
    {
        $this->initialized['syntheticStorageSizeBytes'] = true;
        $this->syntheticStorageSizeBytes = $syntheticStorageSizeBytes;
        return $this;
    }
    /**
     * Bytes-Hour. The amount of storage consumed hourly.
     *
     * @return int
     */
    public function getDataStorageBytesHour(): int
    {
        return $this->dataStorageBytesHour;
    }
    /**
     * Bytes-Hour. The amount of storage consumed hourly.
     *
     * @param int $dataStorageBytesHour
     *
     * @return self
     */
    public function setDataStorageBytesHour(int $dataStorageBytesHour): self
    {
        $this->initialized['dataStorageBytesHour'] = true;
        $this->dataStorageBytesHour = $dataStorageBytesHour;
        return $this;
    }
}