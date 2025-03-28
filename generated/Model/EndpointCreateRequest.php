<?php

namespace Vendor\Library\Generated\Model;

class EndpointCreateRequest extends \ArrayObject
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
     * @var EndpointCreateRequestEndpoint
     */
    protected $endpoint;
    /**
     * 
     *
     * @return EndpointCreateRequestEndpoint
     */
    public function getEndpoint(): EndpointCreateRequestEndpoint
    {
        return $this->endpoint;
    }
    /**
     * 
     *
     * @param EndpointCreateRequestEndpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(EndpointCreateRequestEndpoint $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
}