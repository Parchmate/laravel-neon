<?php

namespace Vendor\Library\Generated\Model;

class NeonAuthCreateIntegrationRequest extends \ArrayObject
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
    protected $authProvider;
    /**
     * 
     *
     * @var string
     */
    protected $projectId;
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
     * @return string
     */
    public function getAuthProvider(): string
    {
        return $this->authProvider;
    }
    /**
     * 
     *
     * @param string $authProvider
     *
     * @return self
     */
    public function setAuthProvider(string $authProvider): self
    {
        $this->initialized['authProvider'] = true;
        $this->authProvider = $authProvider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
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
}