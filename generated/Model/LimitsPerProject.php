<?php

namespace Vendor\Library\Generated\Model;

class LimitsPerProject extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $computeTimeSeconds;
    /**
     * 
     *
     * @var int
     */
    protected $writtenDataBytes;
    /**
     * 
     *
     * @var int
     */
    protected $dataTransferBytes;
    /**
     * 
     *
     * @var bool
     */
    protected $suspendDefaultBranch;
    /**
     * 
     *
     * @return int
     */
    public function getComputeTimeSeconds(): int
    {
        return $this->computeTimeSeconds;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getWrittenDataBytes(): int
    {
        return $this->writtenDataBytes;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getDataTransferBytes(): int
    {
        return $this->dataTransferBytes;
    }
    /**
     * 
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
     * 
     *
     * @return bool
     */
    public function getSuspendDefaultBranch(): bool
    {
        return $this->suspendDefaultBranch;
    }
    /**
     * 
     *
     * @param bool $suspendDefaultBranch
     *
     * @return self
     */
    public function setSuspendDefaultBranch(bool $suspendDefaultBranch): self
    {
        $this->initialized['suspendDefaultBranch'] = true;
        $this->suspendDefaultBranch = $suspendDefaultBranch;
        return $this;
    }
}