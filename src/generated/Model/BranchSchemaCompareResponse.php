<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchSchemaCompareResponse extends \ArrayObject
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
     * @var string
     */
    protected $diff;
    /**
     * 
     *
     * @return string
     */
    public function getDiff(): string
    {
        return $this->diff;
    }
    /**
     * 
     *
     * @param string $diff
     *
     * @return self
     */
    public function setDiff(string $diff): self
    {
        $this->initialized['diff'] = true;
        $this->diff = $diff;
        return $this;
    }
}