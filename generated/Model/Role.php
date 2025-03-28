<?php

namespace Vendor\Library\Generated\Model;

class Role extends \ArrayObject
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
     * The ID of the branch to which the role belongs
     *
     * @var string
     */
    protected $branchId;
    /**
     * The role name
     *
     * @var string
     */
    protected $name;
    /**
     * The role password
     *
     * @var string
     */
    protected $password;
    /**
     * Whether or not the role is system-protected
     *
     * @var bool
     */
    protected $protected;
    /**
     * A timestamp indicating when the role was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the role was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The ID of the branch to which the role belongs
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * The ID of the branch to which the role belongs
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
     * The role name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The role name
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
     * The role password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * The role password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Whether or not the role is system-protected
     *
     * @return bool
     */
    public function getProtected(): bool
    {
        return $this->protected;
    }
    /**
     * Whether or not the role is system-protected
     *
     * @param bool $protected
     *
     * @return self
     */
    public function setProtected(bool $protected): self
    {
        $this->initialized['protected'] = true;
        $this->protected = $protected;
        return $this;
    }
    /**
     * A timestamp indicating when the role was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the role was created
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
     * A timestamp indicating when the role was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the role was last updated
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