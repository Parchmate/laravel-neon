<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class DatabaseResponse extends \ArrayObject
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
     * @var Database
     */
    protected $database;
    /**
     * 
     *
     * @return Database
     */
    public function getDatabase(): Database
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param Database $database
     *
     * @return self
     */
    public function setDatabase(Database $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
}