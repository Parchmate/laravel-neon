<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchSchemaResponse extends \ArrayObject
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
    protected $sql;
    /**
     * 
     *
     * @return string
     */
    public function getSql(): string
    {
        return $this->sql;
    }
    /**
     * 
     *
     * @param string $sql
     *
     * @return self
     */
    public function setSql(string $sql): self
    {
        $this->initialized['sql'] = true;
        $this->sql = $sql;
        return $this;
    }
}