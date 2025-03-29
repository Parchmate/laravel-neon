<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchResponse extends \ArrayObject
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
     * @var Branch
     */
    protected $branch;
    /**
     * 
     *
     * @return Branch
     */
    public function getBranch(): Branch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param Branch $branch
     *
     * @return self
     */
    public function setBranch(Branch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
}