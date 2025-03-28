<?php

namespace Vendor\Library\Generated\Model;

class ProjectCreateRequestProjectBranch extends \ArrayObject
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
     * The default branch name. If not specified, the default branch name, `main`, will be used.
     *
     * @var string
     */
    protected $name;
    /**
     * The role name. If not specified, the default role name, `{database_name}_owner`, will be used.
     *
     * @var string
     */
    protected $roleName;
    /**
     * The database name. If not specified, the default database name, `neondb`, will be used.
     *
     * @var string
     */
    protected $databaseName;
    /**
     * The default branch name. If not specified, the default branch name, `main`, will be used.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The default branch name. If not specified, the default branch name, `main`, will be used.
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
     * The role name. If not specified, the default role name, `{database_name}_owner`, will be used.
     *
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->roleName;
    }
    /**
     * The role name. If not specified, the default role name, `{database_name}_owner`, will be used.
     *
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(string $roleName): self
    {
        $this->initialized['roleName'] = true;
        $this->roleName = $roleName;
        return $this;
    }
    /**
     * The database name. If not specified, the default database name, `neondb`, will be used.
     *
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
    /**
     * The database name. If not specified, the default database name, `neondb`, will be used.
     *
     * @param string $databaseName
     *
     * @return self
     */
    public function setDatabaseName(string $databaseName): self
    {
        $this->initialized['databaseName'] = true;
        $this->databaseName = $databaseName;
        return $this;
    }
}