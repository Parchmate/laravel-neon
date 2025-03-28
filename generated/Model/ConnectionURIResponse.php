<?php

namespace Vendor\Library\Generated\Model;

class ConnectionURIResponse extends \ArrayObject
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
     * The connection URI.
     *
     * @var string
     */
    protected $uri;
    /**
     * The connection URI.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * The connection URI.
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}