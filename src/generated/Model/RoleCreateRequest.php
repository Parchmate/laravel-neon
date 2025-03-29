<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class RoleCreateRequest extends \ArrayObject
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
     * @var RoleCreateRequestRole
     */
    protected $role;
    /**
     * 
     *
     * @return RoleCreateRequestRole
     */
    public function getRole(): RoleCreateRequestRole
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param RoleCreateRequestRole $role
     *
     * @return self
     */
    public function setRole(RoleCreateRequestRole $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}