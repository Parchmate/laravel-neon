<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ConsumptionHistoryPerAccountResponse extends \ArrayObject
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
     * @var list<ConsumptionHistoryPerPeriod>
     */
    protected $periods;
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