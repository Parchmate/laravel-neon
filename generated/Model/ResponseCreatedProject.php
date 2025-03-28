<?php

namespace Vendor\Library\Generated\Model;

class ResponseCreatedProject extends \ArrayObject
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
     * @var Project
     */
    protected $project;
    /**
     * 
     *
     * @var list<ConnectionDetails>
     */
    protected $connectionUris;
    /**
     * 
     *
     * @var list<Role>
     */
    protected $roles;
    /**
     * 
     *
     * @var list<Database>
     */
    protected $databases;
    /**
     * 
     *
     * @var list<Operation>
     */
    protected $operations;
    /**
     * 
     *
     * @var Branch
     */
    protected $branch;
    /**
     * 
     *
     * @var list<Endpoint>
     */
    protected $endpoints;
    /**
     * 
     *
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param Project $project
     *
     * @return self
     */
    public function setProject(Project $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;
        return $this;
    }
    /**
     * 
     *
     * @return list<ConnectionDetails>
     */
    public function getConnectionUris(): array
    {
        return $this->connectionUris;
    }
    /**
     * 
     *
     * @param list<ConnectionDetails> $connectionUris
     *
     * @return self
     */
    public function setConnectionUris(array $connectionUris): self
    {
        $this->initialized['connectionUris'] = true;
        $this->connectionUris = $connectionUris;
        return $this;
    }
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
    /**
     * 
     *
     * @return list<Database>
     */
    public function getDatabases(): array
    {
        return $this->databases;
    }
    /**
     * 
     *
     * @param list<Database> $databases
     *
     * @return self
     */
    public function setDatabases(array $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
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
    /**
     * 
     *
     * @return Branch
     */
    public function getBranch(): Branch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param Branch $branch
     *
     * @return self
     */
    public function setBranch(Branch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
    /**
     * 
     *
     * @return list<Endpoint>
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
    /**
     * 
     *
     * @param list<Endpoint> $endpoints
     *
     * @return self
     */
    public function setEndpoints(array $endpoints): self
    {
        $this->initialized['endpoints'] = true;
        $this->endpoints = $endpoints;
        return $this;
    }
}