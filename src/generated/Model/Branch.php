<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class Branch extends \ArrayObject
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
     * The branch ID. This value is generated when a branch is created. A `branch_id` value has a `br` prefix. For example: `br-small-term-683261`.
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the project to which the branch belongs
     *
     * @var string
     */
    protected $projectId;
    /**
     * The `branch_id` of the parent branch
     *
     * @var string
     */
    protected $parentId;
    /**
    * The Log Sequence Number (LSN) on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @var string
    */
    protected $parentLsn;
    /**
    * The point in time on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @var \DateTime
    */
    protected $parentTimestamp;
    /**
     * The branch name
     *
     * @var string
     */
    protected $name;
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @var string
     */
    protected $currentState;
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @var string
     */
    protected $pendingState;
    /**
     * A UTC timestamp indicating when the `current_state` began
     *
     * @var \DateTime
     */
    protected $stateChangedAt;
    /**
     * The logical size of the branch, in bytes
     *
     * @var int
     */
    protected $logicalSize;
    /**
     * The branch creation source
     *
     * @var string
     */
    protected $creationSource;
    /**
    * DEPRECATED. Use `default` field.
    Whether the branch is the project's primary branch
    
    *
    * @deprecated
    *
    * @var bool
    */
    protected $primary;
    /**
     * Whether the branch is the project's default branch
     *
     * @var bool
     */
    protected $default;
    /**
     * Whether the branch is protected
     *
     * @var bool
     */
    protected $protected;
    /**
    * CPU seconds used by all of the branch's compute endpoints, including deleted ones.
    This value is reset at the beginning of each billing period.
    Examples:
    1. A branch that uses 1 CPU for 1 second is equal to `cpu_used_sec=1`.
    2. A branch that uses 2 CPUs simultaneously for 1 second is equal to `cpu_used_sec=2`.
    
    *
    * @deprecated
    *
    * @var int
    */
    protected $cpuUsedSec;
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
    protected $activeTimeSeconds;
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
     * A timestamp indicating when the branch was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the branch was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * A timestamp indicating when the branch was last reset
     *
     * @var \DateTime
     */
    protected $lastResetAt;
    /**
     * The resolved user model that contains details of the user/org/integration/api_key used for branch creation. This field is filled only in listing/get/create/get/update/delete methods, if it is empty when calling other handlers, it does not mean that it is empty in the system.
     *
     * @var BranchCreatedBy
     */
    protected $createdBy;
    /**
     * The source of initialization for the branch. Valid values are `schema-only` and `parent-data` (default).
     * `schema-only` - creates a new root branch containing only the schema. Use `parent_id` to specify the source branch. Optionally, you can provide `parent_lsn` or `parent_timestamp` to branch from a specific point in time or LSN. These fields define which branch to copy the schema from and at what point—they do not establish a parent-child relationship between the `parent_id` branch and the new schema-only branch.
     * `parent-data` - creates the branch with both schema and data from the parent.
     *
     * @var string
     */
    protected $initSource;
    /**
     * The branch ID. This value is generated when a branch is created. A `branch_id` value has a `br` prefix. For example: `br-small-term-683261`.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The branch ID. This value is generated when a branch is created. A `branch_id` value has a `br` prefix. For example: `br-small-term-683261`.
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
     * The ID of the project to which the branch belongs
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The ID of the project to which the branch belongs
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
     * The `branch_id` of the parent branch
     *
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }
    /**
     * The `branch_id` of the parent branch
     *
     * @param string $parentId
     *
     * @return self
     */
    public function setParentId(string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
    * The Log Sequence Number (LSN) on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @return string
    */
    public function getParentLsn(): string
    {
        return $this->parentLsn;
    }
    /**
    * The Log Sequence Number (LSN) on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @param string $parentLsn
    *
    * @return self
    */
    public function setParentLsn(string $parentLsn): self
    {
        $this->initialized['parentLsn'] = true;
        $this->parentLsn = $parentLsn;
        return $this;
    }
    /**
    * The point in time on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @return \DateTime
    */
    public function getParentTimestamp(): \DateTime
    {
        return $this->parentTimestamp;
    }
    /**
    * The point in time on the parent branch from which this branch was created.
    When restoring a branch using the [Restore branch](https://api-docs.neon.tech/reference/restoreprojectbranch) endpoint,
    this value isn’t finalized until all operations related to the restore have completed successfully.
    
    *
    * @param \DateTime $parentTimestamp
    *
    * @return self
    */
    public function setParentTimestamp(\DateTime $parentTimestamp): self
    {
        $this->initialized['parentTimestamp'] = true;
        $this->parentTimestamp = $parentTimestamp;
        return $this;
    }
    /**
     * The branch name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The branch name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @return string
     */
    public function getCurrentState(): string
    {
        return $this->currentState;
    }
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @param string $currentState
     *
     * @return self
     */
    public function setCurrentState(string $currentState): self
    {
        $this->initialized['currentState'] = true;
        $this->currentState = $currentState;
        return $this;
    }
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @return string
     */
    public function getPendingState(): string
    {
        return $this->pendingState;
    }
    /**
     * The branch’s state, indicating if it is initializing, ready for use, or archived.
     * 'init' - the branch is being created but is not available for querying.
     * 'ready' - the branch is fully operational and ready for querying. Expect normal query response times.
     * 'archived' - the branch is stored in cost-effective archival storage. Expect slow query response times.
     *
     * @param string $pendingState
     *
     * @return self
     */
    public function setPendingState(string $pendingState): self
    {
        $this->initialized['pendingState'] = true;
        $this->pendingState = $pendingState;
        return $this;
    }
    /**
     * A UTC timestamp indicating when the `current_state` began
     *
     * @return \DateTime
     */
    public function getStateChangedAt(): \DateTime
    {
        return $this->stateChangedAt;
    }
    /**
     * A UTC timestamp indicating when the `current_state` began
     *
     * @param \DateTime $stateChangedAt
     *
     * @return self
     */
    public function setStateChangedAt(\DateTime $stateChangedAt): self
    {
        $this->initialized['stateChangedAt'] = true;
        $this->stateChangedAt = $stateChangedAt;
        return $this;
    }
    /**
     * The logical size of the branch, in bytes
     *
     * @return int
     */
    public function getLogicalSize(): int
    {
        return $this->logicalSize;
    }
    /**
     * The logical size of the branch, in bytes
     *
     * @param int $logicalSize
     *
     * @return self
     */
    public function setLogicalSize(int $logicalSize): self
    {
        $this->initialized['logicalSize'] = true;
        $this->logicalSize = $logicalSize;
        return $this;
    }
    /**
     * The branch creation source
     *
     * @return string
     */
    public function getCreationSource(): string
    {
        return $this->creationSource;
    }
    /**
     * The branch creation source
     *
     * @param string $creationSource
     *
     * @return self
     */
    public function setCreationSource(string $creationSource): self
    {
        $this->initialized['creationSource'] = true;
        $this->creationSource = $creationSource;
        return $this;
    }
    /**
    * DEPRECATED. Use `default` field.
    Whether the branch is the project's primary branch
    
    *
    * @deprecated
    *
    * @return bool
    */
    public function getPrimary(): bool
    {
        return $this->primary;
    }
    /**
    * DEPRECATED. Use `default` field.
    Whether the branch is the project's primary branch
    
    *
    * @param bool $primary
    *
    * @deprecated
    *
    * @return self
    */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * Whether the branch is the project's default branch
     *
     * @return bool
     */
    public function getDefault(): bool
    {
        return $this->default;
    }
    /**
     * Whether the branch is the project's default branch
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * Whether the branch is protected
     *
     * @return bool
     */
    public function getProtected(): bool
    {
        return $this->protected;
    }
    /**
     * Whether the branch is protected
     *
     * @param bool $protected
     *
     * @return self
     */
    public function setProtected(bool $protected): self
    {
        $this->initialized['protected'] = true;
        $this->protected = $protected;
        return $this;
    }
    /**
    * CPU seconds used by all of the branch's compute endpoints, including deleted ones.
    This value is reset at the beginning of each billing period.
    Examples:
    1. A branch that uses 1 CPU for 1 second is equal to `cpu_used_sec=1`.
    2. A branch that uses 2 CPUs simultaneously for 1 second is equal to `cpu_used_sec=2`.
    
    *
    * @deprecated
    *
    * @return int
    */
    public function getCpuUsedSec(): int
    {
        return $this->cpuUsedSec;
    }
    /**
    * CPU seconds used by all of the branch's compute endpoints, including deleted ones.
    This value is reset at the beginning of each billing period.
    Examples:
    1. A branch that uses 1 CPU for 1 second is equal to `cpu_used_sec=1`.
    2. A branch that uses 2 CPUs simultaneously for 1 second is equal to `cpu_used_sec=2`.
    
    *
    * @param int $cpuUsedSec
    *
    * @deprecated
    *
    * @return self
    */
    public function setCpuUsedSec(int $cpuUsedSec): self
    {
        $this->initialized['cpuUsedSec'] = true;
        $this->cpuUsedSec = $cpuUsedSec;
        return $this;
    }
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
    public function getActiveTimeSeconds(): int
    {
        return $this->activeTimeSeconds;
    }
    /**
     * 
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
     * A timestamp indicating when the branch was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the branch was created
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
     * A timestamp indicating when the branch was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the branch was last updated
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
     * A timestamp indicating when the branch was last reset
     *
     * @return \DateTime
     */
    public function getLastResetAt(): \DateTime
    {
        return $this->lastResetAt;
    }
    /**
     * A timestamp indicating when the branch was last reset
     *
     * @param \DateTime $lastResetAt
     *
     * @return self
     */
    public function setLastResetAt(\DateTime $lastResetAt): self
    {
        $this->initialized['lastResetAt'] = true;
        $this->lastResetAt = $lastResetAt;
        return $this;
    }
    /**
     * The resolved user model that contains details of the user/org/integration/api_key used for branch creation. This field is filled only in listing/get/create/get/update/delete methods, if it is empty when calling other handlers, it does not mean that it is empty in the system.
     *
     * @return BranchCreatedBy
     */
    public function getCreatedBy(): BranchCreatedBy
    {
        return $this->createdBy;
    }
    /**
     * The resolved user model that contains details of the user/org/integration/api_key used for branch creation. This field is filled only in listing/get/create/get/update/delete methods, if it is empty when calling other handlers, it does not mean that it is empty in the system.
     *
     * @param BranchCreatedBy $createdBy
     *
     * @return self
     */
    public function setCreatedBy(BranchCreatedBy $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The source of initialization for the branch. Valid values are `schema-only` and `parent-data` (default).
     * `schema-only` - creates a new root branch containing only the schema. Use `parent_id` to specify the source branch. Optionally, you can provide `parent_lsn` or `parent_timestamp` to branch from a specific point in time or LSN. These fields define which branch to copy the schema from and at what point—they do not establish a parent-child relationship between the `parent_id` branch and the new schema-only branch.
     * `parent-data` - creates the branch with both schema and data from the parent.
     *
     * @return string
     */
    public function getInitSource(): string
    {
        return $this->initSource;
    }
    /**
     * The source of initialization for the branch. Valid values are `schema-only` and `parent-data` (default).
     * `schema-only` - creates a new root branch containing only the schema. Use `parent_id` to specify the source branch. Optionally, you can provide `parent_lsn` or `parent_timestamp` to branch from a specific point in time or LSN. These fields define which branch to copy the schema from and at what point—they do not establish a parent-child relationship between the `parent_id` branch and the new schema-only branch.
     * `parent-data` - creates the branch with both schema and data from the parent.
     *
     * @param string $initSource
     *
     * @return self
     */
    public function setInitSource(string $initSource): self
    {
        $this->initialized['initSource'] = true;
        $this->initSource = $initSource;
        return $this;
    }
}