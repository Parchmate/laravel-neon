<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ConsumptionHistoryPerProjectResponse extends \ArrayObject
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
     * @var list<ConsumptionHistoryPerProject>
     */
    protected $projects;
    /**
     * 
     *
     * @return list<ConsumptionHistoryPerProject>
     */
    public function getProjects(): array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param list<ConsumptionHistoryPerProject> $projects
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