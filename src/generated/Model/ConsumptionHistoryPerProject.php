<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ConsumptionHistoryPerProject extends \ArrayObject
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
     * The project ID
     *
     * @var string
     */
    protected $projectId;
    /**
     * 
     *
     * @var list<ConsumptionHistoryPerPeriod>
     */
    protected $periods;
    /**
     * The project ID
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The project ID
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
     * @return list<ConsumptionHistoryPerPeriod>
     */
    public function getPeriods(): array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param list<ConsumptionHistoryPerPeriod> $periods
     *
     * @return self
     */
    public function setPeriods(array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;
        return $this;
    }
}