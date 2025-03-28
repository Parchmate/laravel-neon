<?php

namespace Vendor\Library\Generated\Model;

class RoleOperations extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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
    /**
     * 
     *
     * @return list<Operation>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param list<Operation> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
}