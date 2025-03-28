<?php

namespace Vendor\Library\Generated\Model;

class ProjectsProjectIdPatchResponse200 extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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