<?php

namespace Vendor\Library\Generated\Model;

class DatabasesResponse extends \ArrayObject
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
     * @var list<Database>
     */
    protected $databases;
    /**
     * 
     *
     * @return list<Database>
     */
    public function getDatabases(): array
    {
        return $this->databases;
    }
    /**
     * 
     *
     * @param list<Database> $databases
     *
     * @return self
     */
    public function setDatabases(array $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
}