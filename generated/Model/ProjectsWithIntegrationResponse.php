<?php

namespace Vendor\Library\Generated\Model;

class ProjectsWithIntegrationResponse extends \ArrayObject
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
     * @var list<ProjectsWithIntegrationResponseProjectsItem>
     */
    protected $projects;
    /**
     * 
     *
     * @return list<ProjectsWithIntegrationResponseProjectsItem>
     */
    public function getProjects(): array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param list<ProjectsWithIntegrationResponseProjectsItem> $projects
     *
     * @return self
     */
    public function setProjects(array $projects): self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;
        return $this;
    }
}