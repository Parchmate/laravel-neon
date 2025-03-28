<?php

namespace Vendor\Library\Generated\Model;

class EndpointsResponse extends \ArrayObject
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
     * @var list<Endpoint>
     */
    protected $endpoints;
    /**
     * 
     *
     * @return list<Endpoint>
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
    /**
     * 
     *
     * @param list<Endpoint> $endpoints
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