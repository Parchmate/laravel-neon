<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchRestoreRequest extends \ArrayObject
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
    * The `branch_id` of the restore source branch.
    If `source_timestamp` and `source_lsn` are omitted, the branch will be restored to head.
    If `source_branch_id` is equal to the branch's id, `source_timestamp` or `source_lsn` is required.
    
    *
    * @var string
    */
    protected $sourceBranchId;
    /**
     * A Log Sequence Number (LSN) on the source branch. The branch will be restored with data from this LSN.
     *
     * @var string
     */
    protected $sourceLsn;
    /**
    * A timestamp identifying a point in time on the source branch. The branch will be restored with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
    *
    * @var \DateTime
    */
    protected $sourceTimestamp;
    /**
    * If not empty, the previous state of the branch will be saved to a branch with this name.
    If the branch has children or the `source_branch_id` is equal to the branch id, this field is required. All existing child branches will be moved to the newly created branch under the name `preserve_under_name`.
    
    *
    * @var string
    */
    protected $preserveUnderName;
    /**
    * The `branch_id` of the restore source branch.
    If `source_timestamp` and `source_lsn` are omitted, the branch will be restored to head.
    If `source_branch_id` is equal to the branch's id, `source_timestamp` or `source_lsn` is required.
    
    *
    * @return string
    */
    public function getSourceBranchId(): string
    {
        return $this->sourceBranchId;
    }
    /**
    * The `branch_id` of the restore source branch.
    If `source_timestamp` and `source_lsn` are omitted, the branch will be restored to head.
    If `source_branch_id` is equal to the branch's id, `source_timestamp` or `source_lsn` is required.
    
    *
    * @param string $sourceBranchId
    *
    * @return self
    */
    public function setSourceBranchId(string $sourceBranchId): self
    {
        $this->initialized['sourceBranchId'] = true;
        $this->sourceBranchId = $sourceBranchId;
        return $this;
    }
    /**
     * A Log Sequence Number (LSN) on the source branch. The branch will be restored with data from this LSN.
     *
     * @return string
     */
    public function getSourceLsn(): string
    {
        return $this->sourceLsn;
    }
    /**
     * A Log Sequence Number (LSN) on the source branch. The branch will be restored with data from this LSN.
     *
     * @param string $sourceLsn
     *
     * @return self
     */
    public function setSourceLsn(string $sourceLsn): self
    {
        $this->initialized['sourceLsn'] = true;
        $this->sourceLsn = $sourceLsn;
        return $this;
    }
    /**
    * A timestamp identifying a point in time on the source branch. The branch will be restored with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
    *
    * @return \DateTime
    */
    public function getSourceTimestamp(): \DateTime
    {
        return $this->sourceTimestamp;
    }
    /**
    * A timestamp identifying a point in time on the source branch. The branch will be restored with data starting from this point in time.
    The timestamp must be provided in ISO 8601 format; for example: `2024-02-26T12:00:00Z`.
    
    *
    * @param \DateTime $sourceTimestamp
    *
    * @return self
    */
    public function setSourceTimestamp(\DateTime $sourceTimestamp): self
    {
        $this->initialized['sourceTimestamp'] = true;
        $this->sourceTimestamp = $sourceTimestamp;
        return $this;
    }
    /**
    * If not empty, the previous state of the branch will be saved to a branch with this name.
    If the branch has children or the `source_branch_id` is equal to the branch id, this field is required. All existing child branches will be moved to the newly created branch under the name `preserve_under_name`.
    
    *
    * @return string
    */
    public function getPreserveUnderName(): string
    {
        return $this->preserveUnderName;
    }
    /**
    * If not empty, the previous state of the branch will be saved to a branch with this name.
    If the branch has children or the `source_branch_id` is equal to the branch id, this field is required. All existing child branches will be moved to the newly created branch under the name `preserve_under_name`.
    
    *
    * @param string $preserveUnderName
    *
    * @return self
    */
    public function setPreserveUnderName(string $preserveUnderName): self
    {
        $this->initialized['preserveUnderName'] = true;
        $this->preserveUnderName = $preserveUnderName;
        return $this;
    }
}