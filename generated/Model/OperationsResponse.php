<?php

namespace Vendor\Library\Generated\Model;

class OperationsResponse extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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