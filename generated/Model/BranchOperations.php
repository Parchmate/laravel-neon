<?php

namespace Vendor\Library\Generated\Model;

class BranchOperations extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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
    /**
     * 
     *
     * @return list<Operation>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param list<Operation> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
}