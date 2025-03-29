<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchUpdateRequest extends \ArrayObject
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
     * @var BranchUpdateRequestBranch
     */
    protected $branch;
    /**
     * 
     *
     * @return BranchUpdateRequestBranch
     */
    public function getBranch(): BranchUpdateRequestBranch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param BranchUpdateRequestBranch $branch
     *
     * @return self
     */
    public function setBranch(BranchUpdateRequestBranch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
}