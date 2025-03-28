<?php

namespace Vendor\Library\Generated\Model;

class ProjectResponse extends \ArrayObject
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
}