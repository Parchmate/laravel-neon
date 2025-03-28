<?php

namespace Vendor\Library\Generated\Model;

class Member extends \ArrayObject
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
    protected $userId;
    /**
     * 
     *
     * @var string
     */
    protected $orgId;
    /**
     * The role of the organization member
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $joinedAt;
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
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }
    /**
     * 
     *
     * @param string $orgId
     *
     * @return self
     */
    public function setOrgId(string $orgId): self
    {
        $this->initialized['orgId'] = true;
        $this->orgId = $orgId;
        return $this;
    }
    /**
     * The role of the organization member
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * The role of the organization member
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getJoinedAt(): \DateTime
    {
        return $this->joinedAt;
    }
    /**
     * 
     *
     * @param \DateTime $joinedAt
     *
     * @return self
     */
    public function setJoinedAt(\DateTime $joinedAt): self
    {
        $this->initialized['joinedAt'] = true;
        $this->joinedAt = $joinedAt;
        return $this;
    }
}