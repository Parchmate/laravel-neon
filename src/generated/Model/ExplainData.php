<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ExplainData extends \ArrayObject
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
    protected $qUERYPLAN;
    /**
     * 
     *
     * @return string
     */
    public function getQUERYPLAN(): string
    {
        return $this->qUERYPLAN;
    }
    /**
     * 
     *
     * @param string $qUERYPLAN
     *
     * @return self
     */
    public function setQUERYPLAN(string $qUERYPLAN): self
    {
        $this->initialized['qUERYPLAN'] = true;
        $this->qUERYPLAN = $qUERYPLAN;
        return $this;
    }
}