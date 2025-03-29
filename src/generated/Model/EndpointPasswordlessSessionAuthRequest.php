<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class EndpointPasswordlessSessionAuthRequest extends \ArrayObject
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
     * @var string
     */
    protected $sessionId;
    /**
     * 
     *
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->sessionId;
    }
    /**
     * 
     *
     * @param string $sessionId
     *
     * @return self
     */
    public function setSessionId(string $sessionId): self
    {
        $this->initialized['sessionId'] = true;
        $this->sessionId = $sessionId;
        return $this;
    }
}