<?php

namespace Vendor\Library\Generated\Model;

class ActiveRegionsResponse extends \ArrayObject
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
     * The list of active regions
     *
     * @var list<RegionResponse>
     */
    protected $regions;
    /**
     * The list of active regions
     *
     * @return list<RegionResponse>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * The list of active regions
     *
     * @param list<RegionResponse> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
}