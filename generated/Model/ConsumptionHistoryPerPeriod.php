<?php

namespace Vendor\Library\Generated\Model;

class ConsumptionHistoryPerPeriod extends \ArrayObject
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
     * The ID assigned to the specified billing period.
     *
     * @var string
     */
    protected $periodId;
    /**
     * The billing plan applicable during the billing period.
     *
     * @var string
     */
    protected $periodPlan;
    /**
     * The start date-time of the billing period.
     *
     * @var \DateTime
     */
    protected $periodStart;
    /**
     * The end date-time of the billing period, available for the past periods only.
     *
     * @var \DateTime
     */
    protected $periodEnd;
    /**
     * 
     *
     * @var list<ConsumptionHistoryPerTimeframe>
     */
    protected $consumption;
    /**
     * The ID assigned to the specified billing period.
     *
     * @return string
     */
    public function getPeriodId(): string
    {
        return $this->periodId;
    }
    /**
     * The ID assigned to the specified billing period.
     *
     * @param string $periodId
     *
     * @return self
     */
    public function setPeriodId(string $periodId): self
    {
        $this->initialized['periodId'] = true;
        $this->periodId = $periodId;
        return $this;
    }
    /**
     * The billing plan applicable during the billing period.
     *
     * @return string
     */
    public function getPeriodPlan(): string
    {
        return $this->periodPlan;
    }
    /**
     * The billing plan applicable during the billing period.
     *
     * @param string $periodPlan
     *
     * @return self
     */
    public function setPeriodPlan(string $periodPlan): self
    {
        $this->initialized['periodPlan'] = true;
        $this->periodPlan = $periodPlan;
        return $this;
    }
    /**
     * The start date-time of the billing period.
     *
     * @return \DateTime
     */
    public function getPeriodStart(): \DateTime
    {
        return $this->periodStart;
    }
    /**
     * The start date-time of the billing period.
     *
     * @param \DateTime $periodStart
     *
     * @return self
     */
    public function setPeriodStart(\DateTime $periodStart): self
    {
        $this->initialized['periodStart'] = true;
        $this->periodStart = $periodStart;
        return $this;
    }
    /**
     * The end date-time of the billing period, available for the past periods only.
     *
     * @return \DateTime
     */
    public function getPeriodEnd(): \DateTime
    {
        return $this->periodEnd;
    }
    /**
     * The end date-time of the billing period, available for the past periods only.
     *
     * @param \DateTime $periodEnd
     *
     * @return self
     */
    public function setPeriodEnd(\DateTime $periodEnd): self
    {
        $this->initialized['periodEnd'] = true;
        $this->periodEnd = $periodEnd;
        return $this;
    }
    /**
     * 
     *
     * @return list<ConsumptionHistoryPerTimeframe>
     */
    public function getConsumption(): array
    {
        return $this->consumption;
    }
    /**
     * 
     *
     * @param list<ConsumptionHistoryPerTimeframe> $consumption
     *
     * @return self
     */
    public function setConsumption(array $consumption): self
    {
        $this->initialized['consumption'] = true;
        $this->consumption = $consumption;
        return $this;
    }
}