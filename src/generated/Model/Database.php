<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class Database extends \ArrayObject
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
     * The database ID
     *
     * @var int
     */
    protected $id;
    /**
     * The ID of the branch to which the database belongs
     *
     * @var string
     */
    protected $branchId;
    /**
     * The database name
     *
     * @var string
     */
    protected $name;
    /**
     * The name of role that owns the database
     *
     * @var string
     */
    protected $ownerName;
    /**
     * A timestamp indicating when the database was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the database was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The database ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The database ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The ID of the branch to which the database belongs
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * The ID of the branch to which the database belongs
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * The database name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The database name
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
     * The name of role that owns the database
     *
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }
    /**
     * The name of role that owns the database
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
    /**
     * A timestamp indicating when the database was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the database was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A timestamp indicating when the database was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the database was last updated
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}