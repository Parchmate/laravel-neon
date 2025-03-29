<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class VPCEndpointsResponse extends \ArrayObject
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
     * @var list<VPCEndpoint>
     */
    protected $endpoints;
    /**
     * 
     *
     * @return list<VPCEndpoint>
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
    /**
     * 
     *
     * @param list<VPCEndpoint> $endpoints
     *
     * @return self
     */
    public function setEndpoints(array $endpoints): self
    {
        $this->initialized['endpoints'] = true;
        $this->endpoints = $endpoints;
        return $this;
    }
}