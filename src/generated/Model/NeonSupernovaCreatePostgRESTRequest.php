<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class NeonSupernovaCreatePostgRESTRequest extends \ArrayObject
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
    protected $branchId;
    /**
     * 
     *
     * @var string
     */
    protected $databaseName;
    /**
     * 
     *
     * @var string
     */
    protected $roleName;
    /**
     * 
     *
     * @var list<string>
     */
    protected $dbSchemas;
    /**
     * 
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * 
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->roleName;
    }
    /**
     * 
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
     * 
     *
     * @return list<string>
     */
    public function getDbSchemas(): array
    {
        return $this->dbSchemas;
    }
    /**
     * 
     *
     * @param list<string> $dbSchemas
     *
     * @return self
     */
    public function setDbSchemas(array $dbSchemas): self
    {
        $this->initialized['dbSchemas'] = true;
        $this->dbSchemas = $dbSchemas;
        return $this;
    }
}