<?php

namespace Vendor\Library\Generated\Model;

class ProjectQuota extends \ArrayObject
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
     * The total amount of wall-clock time allowed to be spent by the project's compute endpoints.
     *
     * @var int
     */
    protected $activeTimeSeconds;
    /**
     * The total amount of CPU seconds allowed to be spent by the project's compute endpoints.
     *
     * @var int
     */
    protected $computeTimeSeconds;
    /**
     * Total amount of data written to all of a project's branches.
     *
     * @var int
     */
    protected $writtenDataBytes;
    /**
     * Total amount of data transferred from all of a project's branches using the proxy.
     *
     * @var int
     */
    protected $dataTransferBytes;
    /**
     * Limit on the logical size of every project's branch.
     *
     * @var int
     */
    protected $logicalSizeBytes;
    /**
     * The total amount of wall-clock time allowed to be spent by the project's compute endpoints.
     *
     * @return int
     */
    public function getActiveTimeSeconds(): int
    {
        return $this->activeTimeSeconds;
    }
    /**
     * The total amount of wall-clock time allowed to be spent by the project's compute endpoints.
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
     * The total amount of CPU seconds allowed to be spent by the project's compute endpoints.
     *
     * @return int
     */
    public function getComputeTimeSeconds(): int
    {
        return $this->computeTimeSeconds;
    }
    /**
     * The total amount of CPU seconds allowed to be spent by the project's compute endpoints.
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
     * Total amount of data written to all of a project's branches.
     *
     * @return int
     */
    public function getWrittenDataBytes(): int
    {
        return $this->writtenDataBytes;
    }
    /**
     * Total amount of data written to all of a project's branches.
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
     * Total amount of data transferred from all of a project's branches using the proxy.
     *
     * @return int
     */
    public function getDataTransferBytes(): int
    {
        return $this->dataTransferBytes;
    }
    /**
     * Total amount of data transferred from all of a project's branches using the proxy.
     *
     * @param int $dataTransferBytes
     *
     * @return self
     */
    public function setDataTransferBytes(int $dataTransferBytes): self
    {
        $this->initialized['dataTransferBytes'] = true;
        $this->dataTransferBytes = $dataTransferBytes;
        return $this;
    }
    /**
     * Limit on the logical size of every project's branch.
     *
     * @return int
     */
    public function getLogicalSizeBytes(): int
    {
        return $this->logicalSizeBytes;
    }
    /**
     * Limit on the logical size of every project's branch.
     *
     * @param int $logicalSizeBytes
     *
     * @return self
     */
    public function setLogicalSizeBytes(int $logicalSizeBytes): self
    {
        $this->initialized['logicalSizeBytes'] = true;
        $this->logicalSizeBytes = $logicalSizeBytes;
        return $this;
    }
}