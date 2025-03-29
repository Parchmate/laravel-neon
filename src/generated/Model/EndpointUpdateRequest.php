<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class EndpointUpdateRequest extends \ArrayObject
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
     * @var EndpointUpdateRequestEndpoint
     */
    protected $endpoint;
    /**
     * 
     *
     * @return EndpointUpdateRequestEndpoint
     */
    public function getEndpoint(): EndpointUpdateRequestEndpoint
    {
        return $this->endpoint;
    }
    /**
     * 
     *
     * @param EndpointUpdateRequestEndpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(EndpointUpdateRequestEndpoint $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
}