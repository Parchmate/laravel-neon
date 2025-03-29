<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class OrganizationInviteUpdateRequest extends \ArrayObject
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
    protected $email;
    /**
     * The role of the organization member
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var bool
     */
    protected $resend;
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return bool
     */
    public function getResend(): bool
    {
        return $this->resend;
    }
    /**
     * 
     *
     * @param bool $resend
     *
     * @return self
     */
    public function setResend(bool $resend): self
    {
        $this->initialized['resend'] = true;
        $this->resend = $resend;
        return $this;
    }
}