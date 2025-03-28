<?php

namespace Vendor\Library\Generated\Model;

class Organization extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $handle;
    /**
     * 
     *
     * @var string
     */
    protected $plan;
    /**
     * A timestamp indicting when the organization was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
    * Organizations created via the Console or the API are managed by `console`.
    Organizations created by other methods can't be deleted via the Console or the API.
    
    *
    * @var string
    */
    protected $managedBy;
    /**
     * A timestamp indicating when the organization was updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string $handle
     *
     * @return self
     */
    public function setHandle(string $handle): self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlan(): string
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(string $plan): self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
        return $this;
    }
    /**
     * A timestamp indicting when the organization was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicting when the organization was created
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
    * Organizations created via the Console or the API are managed by `console`.
    Organizations created by other methods can't be deleted via the Console or the API.
    
    *
    * @return string
    */
    public function getManagedBy(): string
    {
        return $this->managedBy;
    }
    /**
    * Organizations created via the Console or the API are managed by `console`.
    Organizations created by other methods can't be deleted via the Console or the API.
    
    *
    * @param string $managedBy
    *
    * @return self
    */
    public function setManagedBy(string $managedBy): self
    {
        $this->initialized['managedBy'] = true;
        $this->managedBy = $managedBy;
        return $this;
    }
    /**
     * A timestamp indicating when the organization was updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the organization was updated
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