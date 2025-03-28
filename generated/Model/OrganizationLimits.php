<?php

namespace Vendor\Library\Generated\Model;

class OrganizationLimits extends \ArrayObject
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
     * @var Limits
     */
    protected $limits;
    /**
     * 
     *
     * @var array<string, bool>
     */
    protected $features;
    /**
     * 
     *
     * @return Limits
     */
    public function getLimits(): Limits
    {
        return $this->limits;
    }
    /**
     * 
     *
     * @param Limits $limits
     *
     * @return self
     */
    public function setLimits(Limits $limits): self
    {
        $this->initialized['limits'] = true;
        $this->limits = $limits;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, bool>
     */
    public function getFeatures(): iterable
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param array<string, bool> $features
     *
     * @return self
     */
    public function setFeatures(iterable $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}