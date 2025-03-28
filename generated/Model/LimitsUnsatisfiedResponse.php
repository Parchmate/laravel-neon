<?php

namespace Vendor\Library\Generated\Model;

class LimitsUnsatisfiedResponse extends \ArrayObject
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
     * @var list<LimitsUnsatisfiedResponseLimitsItem>
     */
    protected $limits;
    /**
     * 
     *
     * @return list<LimitsUnsatisfiedResponseLimitsItem>
     */
    public function getLimits(): array
    {
        return $this->limits;
    }
    /**
     * 
     *
     * @param list<LimitsUnsatisfiedResponseLimitsItem> $limits
     *
     * @return self
     */
    public function setLimits(array $limits): self
    {
        $this->initialized['limits'] = true;
        $this->limits = $limits;
        return $this;
    }
}