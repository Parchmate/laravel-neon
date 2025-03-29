<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class RoleResponse extends \ArrayObject
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
     * @var Role
     */
    protected $role;
    /**
     * 
     *
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param Role $role
     *
     * @return self
     */
    public function setRole(Role $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}