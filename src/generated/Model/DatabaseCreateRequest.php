<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class DatabaseCreateRequest extends \ArrayObject
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
     * @var DatabaseCreateRequestDatabase
     */
    protected $database;
    /**
     * 
     *
     * @return DatabaseCreateRequestDatabase
     */
    public function getDatabase(): DatabaseCreateRequestDatabase
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param DatabaseCreateRequestDatabase $database
     *
     * @return self
     */
    public function setDatabase(DatabaseCreateRequestDatabase $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
}