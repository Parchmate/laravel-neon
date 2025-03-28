<?php

namespace Vendor\Library\Generated\Model;

class InvitationCreateRequest extends \ArrayObject
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
     * Email to invite
     *
     * @var string
     */
    protected $email;
    /**
     * The role of the organization member
     *
     * @var string
     */
    protected $role;
    /**
     * Email to invite
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email to invite
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