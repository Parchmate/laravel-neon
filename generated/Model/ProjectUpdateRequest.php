<?php

namespace Vendor\Library\Generated\Model;

class ProjectUpdateRequest extends \ArrayObject
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
     * @var ProjectUpdateRequestProject
     */
    protected $project;
    /**
     * 
     *
     * @return ProjectUpdateRequestProject
     */
    public function getProject(): ProjectUpdateRequestProject
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param ProjectUpdateRequestProject $project
     *
     * @return self
     */
    public function setProject(ProjectUpdateRequestProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;
        return $this;
    }
}