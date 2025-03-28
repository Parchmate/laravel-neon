<?php

namespace Vendor\Library\Generated\Model;

class BranchesResponse extends \ArrayObject
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
     * @var list<Branch>
     */
    protected $branches;
    /**
     * 
     *
     * @return list<Branch>
     */
    public function getBranches(): array
    {
        return $this->branches;
    }
    /**
     * 
     *
     * @param list<Branch> $branches
     *
     * @return self
     */
    public function setBranches(array $branches): self
    {
        $this->initialized['branches'] = true;
        $this->branches = $branches;
        return $this;
    }
}