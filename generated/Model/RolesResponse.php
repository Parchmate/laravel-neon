<?php

namespace Vendor\Library\Generated\Model;

class RolesResponse extends \ArrayObject
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
     * @var list<Role>
     */
    protected $roles;
    /**
     * 
     *
     * @return list<Role>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param list<Role> $roles
     *
     * @return self
     */
    public function setRoles(array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;
        return $this;
    }
}