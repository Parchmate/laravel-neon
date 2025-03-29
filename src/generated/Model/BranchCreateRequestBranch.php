<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchCreateRequestBranch extends \ArrayObject
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
     * The `branch_id` of the parent branch. If omitted or empty, the branch will be created from the project's default branch.
     *
     * @var string
     */
    protected $parentId;
    /**
     * The branch name
     *
     * @var string
     */
    protected $name;
    /**
     * A Log Sequence Number (LSN) on the parent branch. The branch will be created with data from this LSN.
     *
     * @var string
     */
    protected $parentLsn;
    /**
    * A timestamp identifying a point in time on the parent branch. The branch will be created with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
    *
    * @var \DateTime
    */
    protected $parentTimestamp;
    /**
     * Whether the branch is protected
     *
     * @var bool
     */
    protected $protected;
    /**
     * Whether to create the branch as archived
     *
     * @var bool
     */
    protected $archived;
    /**
     * The source of initialization for the branch. Valid values are `schema-only` and `parent-data` (default).
     * `schema-only` - creates a new root branch containing only the schema. Use `parent_id` to specify the source branch. Optionally, you can provide `parent_lsn` or `parent_timestamp` to branch from a specific point in time or LSN. These fields define which branch to copy the schema from and at what point—they do not establish a parent-child relationship between the `parent_id` branch and the new schema-only branch.
     * `parent-data` - creates the branch with both schema and data from the parent.
     *
     * @var string
     */
    protected $initSource;
    /**
     * The `branch_id` of the parent branch. If omitted or empty, the branch will be created from the project's default branch.
     *
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }
    /**
     * The `branch_id` of the parent branch. If omitted or empty, the branch will be created from the project's default branch.
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
     * A Log Sequence Number (LSN) on the parent branch. The branch will be created with data from this LSN.
     *
     * @return string
     */
    public function getParentLsn(): string
    {
        return $this->parentLsn;
    }
    /**
     * A Log Sequence Number (LSN) on the parent branch. The branch will be created with data from this LSN.
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
    * A timestamp identifying a point in time on the parent branch. The branch will be created with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
    *
    * @return \DateTime
    */
    public function getParentTimestamp(): \DateTime
    {
        return $this->parentTimestamp;
    }
    /**
    * A timestamp identifying a point in time on the parent branch. The branch will be created with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
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
     * Whether to create the branch as archived
     *
     * @return bool
     */
    public function getArchived(): bool
    {
        return $this->archived;
    }
    /**
     * Whether to create the branch as archived
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
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