<?php

namespace Vendor\Library\Generated\Model;

class DatabaseUpdateRequest extends \ArrayObject
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
     * @var DatabaseUpdateRequestDatabase
     */
    protected $database;
    /**
     * 
     *
     * @return DatabaseUpdateRequestDatabase
     */
    public function getDatabase(): DatabaseUpdateRequestDatabase
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param DatabaseUpdateRequestDatabase $database
     *
     * @return self
     */
    public function setDatabase(DatabaseUpdateRequestDatabase $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
}