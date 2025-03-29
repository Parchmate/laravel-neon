<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class DatabaseOperations extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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