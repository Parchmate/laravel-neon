<?php

namespace Vendor\Library\Generated\Model;

class Invitation extends \ArrayObject
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
     * Email of the invited user
     *
     * @var string
     */
    protected $email;
    /**
     * Organization id as it is stored in Neon
     *
     * @var string
     */
    protected $orgId;
    /**
     * UUID for the user_id who extended the invitation
     *
     * @var string
     */
    protected $invitedBy;
    /**
     * Timestamp when the invitation was created
     *
     * @var \DateTime
     */
    protected $invitedAt;
    /**
     * The role of the organization member
     *
     * @var string
     */
    protected $role;
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
     * Email of the invited user
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of the invited user
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Organization id as it is stored in Neon
     *
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }
    /**
     * Organization id as it is stored in Neon
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
     * UUID for the user_id who extended the invitation
     *
     * @return string
     */
    public function getInvitedBy(): string
    {
        return $this->invitedBy;
    }
    /**
     * UUID for the user_id who extended the invitation
     *
     * @param string $invitedBy
     *
     * @return self
     */
    public function setInvitedBy(string $invitedBy): self
    {
        $this->initialized['invitedBy'] = true;
        $this->invitedBy = $invitedBy;
        return $this;
    }
    /**
     * Timestamp when the invitation was created
     *
     * @return \DateTime
     */
    public function getInvitedAt(): \DateTime
    {
        return $this->invitedAt;
    }
    /**
     * Timestamp when the invitation was created
     *
     * @param \DateTime $invitedAt
     *
     * @return self
     */
    public function setInvitedAt(\DateTime $invitedAt): self
    {
        $this->initialized['invitedAt'] = true;
        $this->invitedAt = $invitedAt;
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
}