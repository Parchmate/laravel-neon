<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectsApplicationsMapResponse extends \ArrayObject
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
     * @var array<string, list<string>>
     */
    protected $applications;
    /**
     * 
     *
     * @return array<string, list<string>>
     */
    public function getApplications(): iterable
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param array<string, list<string>> $applications
     *
     * @return self
     */
    public function setApplications(iterable $applications): self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
}