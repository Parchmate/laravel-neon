<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class EndpointResponse extends \ArrayObject
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
     * @var Endpoint
     */
    protected $endpoint;
    /**
     * 
     *
     * @return Endpoint
     */
    public function getEndpoint(): Endpoint
    {
        return $this->endpoint;
    }
    /**
     * 
     *
     * @param Endpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(Endpoint $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
}