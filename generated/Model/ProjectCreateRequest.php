<?php

namespace Vendor\Library\Generated\Model;

class ProjectCreateRequest extends \ArrayObject
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
     * @var ProjectCreateRequestProject
     */
    protected $project;
    /**
     * 
     *
     * @return ProjectCreateRequestProject
     */
    public function getProject(): ProjectCreateRequestProject
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param ProjectCreateRequestProject $project
     *
     * @return self
     */
    public function setProject(ProjectCreateRequestProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;
        return $this;
    }
}