<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class OperationResponse extends \ArrayObject
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
     * @var Operation
     */
    protected $operation;
    /**
     * 
     *
     * @return Operation
     */
    public function getOperation(): Operation
    {
        return $this->operation;
    }
    /**
     * 
     *
     * @param Operation $operation
     *
     * @return self
     */
    public function setOperation(Operation $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
}