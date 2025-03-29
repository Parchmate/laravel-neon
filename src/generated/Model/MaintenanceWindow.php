<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class MaintenanceWindow extends \ArrayObject
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
    * A list of weekdays when the maintenance window is active.
    Encoded as ints, where 1 - Monday, and 7 - Sunday.
    
    *
    * @var list<int>
    */
    protected $weekdays;
    /**
     * Start time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @var string
     */
    protected $startTime;
    /**
     * End time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @var string
     */
    protected $endTime;
    /**
    * A list of weekdays when the maintenance window is active.
    Encoded as ints, where 1 - Monday, and 7 - Sunday.
    
    *
    * @return list<int>
    */
    public function getWeekdays(): array
    {
        return $this->weekdays;
    }
    /**
    * A list of weekdays when the maintenance window is active.
    Encoded as ints, where 1 - Monday, and 7 - Sunday.
    
    *
    * @param list<int> $weekdays
    *
    * @return self
    */
    public function setWeekdays(array $weekdays): self
    {
        $this->initialized['weekdays'] = true;
        $this->weekdays = $weekdays;
        return $this;
    }
    /**
     * Start time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     * Start time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * End time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }
    /**
     * End time of the maintenance window, in the format of "HH:MM". Uses UTC.
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime): self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;
        return $this;
    }
}