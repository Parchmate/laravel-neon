<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class DatabaseCreateRequestDatabase extends \ArrayObject
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
     * The name of the database
     *
     * @var string
     */
    protected $name;
    /**
     * The name of the role that owns the database
     *
     * @var string
     */
    protected $ownerName;
    /**
     * The name of the database
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the database
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The name of the role that owns the database
     *
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }
    /**
     * The name of the role that owns the database
     *
     * @param string $ownerName
     *
     * @return self
     */
    public function setOwnerName(string $ownerName): self
    {
        $this->initialized['ownerName'] = true;
        $this->ownerName = $ownerName;
        return $this;
    }
}