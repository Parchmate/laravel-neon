<?php

namespace Vendor\Library\Generated\Model;

class Operation extends \ArrayObject
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
     * The operation ID
     *
     * @var string
     */
    protected $id;
    /**
     * The Neon project ID
     *
     * @var string
     */
    protected $projectId;
    /**
     * The branch ID
     *
     * @var string
     */
    protected $branchId;
    /**
     * The endpoint ID
     *
     * @var string
     */
    protected $endpointId;
    /**
     * The action performed by the operation
     *
     * @var string
     */
    protected $action;
    /**
     * The status of the operation
     *
     * @var string
     */
    protected $status;
    /**
     * The error that occurred
     *
     * @var string
     */
    protected $error;
    /**
     * The number of times the operation failed
     *
     * @var int
     */
    protected $failuresCount;
    /**
     * A timestamp indicating when the operation was last retried
     *
     * @var \DateTime
     */
    protected $retryAt;
    /**
     * A timestamp indicating when the operation was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the operation status was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The total duration of the operation in milliseconds
     *
     * @var int
     */
    protected $totalDurationMs;
    /**
     * The operation ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The operation ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The Neon project ID
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The Neon project ID
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The branch ID
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * The branch ID
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * The endpoint ID
     *
     * @return string
     */
    public function getEndpointId(): string
    {
        return $this->endpointId;
    }
    /**
     * The endpoint ID
     *
     * @param string $endpointId
     *
     * @return self
     */
    public function setEndpointId(string $endpointId): self
    {
        $this->initialized['endpointId'] = true;
        $this->endpointId = $endpointId;
        return $this;
    }
    /**
     * The action performed by the operation
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * The action performed by the operation
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * The status of the operation
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The status of the operation
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The error that occurred
     *
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * The error that occurred
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * The number of times the operation failed
     *
     * @return int
     */
    public function getFailuresCount(): int
    {
        return $this->failuresCount;
    }
    /**
     * The number of times the operation failed
     *
     * @param int $failuresCount
     *
     * @return self
     */
    public function setFailuresCount(int $failuresCount): self
    {
        $this->initialized['failuresCount'] = true;
        $this->failuresCount = $failuresCount;
        return $this;
    }
    /**
     * A timestamp indicating when the operation was last retried
     *
     * @return \DateTime
     */
    public function getRetryAt(): \DateTime
    {
        return $this->retryAt;
    }
    /**
     * A timestamp indicating when the operation was last retried
     *
     * @param \DateTime $retryAt
     *
     * @return self
     */
    public function setRetryAt(\DateTime $retryAt): self
    {
        $this->initialized['retryAt'] = true;
        $this->retryAt = $retryAt;
        return $this;
    }
    /**
     * A timestamp indicating when the operation was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the operation was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A timestamp indicating when the operation status was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the operation status was last updated
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The total duration of the operation in milliseconds
     *
     * @return int
     */
    public function getTotalDurationMs(): int
    {
        return $this->totalDurationMs;
    }
    /**
     * The total duration of the operation in milliseconds
     *
     * @param int $totalDurationMs
     *
     * @return self
     */
    public function setTotalDurationMs(int $totalDurationMs): self
    {
        $this->initialized['totalDurationMs'] = true;
        $this->totalDurationMs = $totalDurationMs;
        return $this;
    }
}