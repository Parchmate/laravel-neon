<?php

namespace Vendor\Library\Generated\Model;

class ConnectionURIsResponse extends \ArrayObject
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
     * @var list<ConnectionDetails>
     */
    protected $connectionUris;
    /**
     * 
     *
     * @return list<ConnectionDetails>
     */
    public function getConnectionUris(): array
    {
        return $this->connectionUris;
    }
    /**
     * 
     *
     * @param list<ConnectionDetails> $connectionUris
     *
     * @return self
     */
    public function setConnectionUris(array $connectionUris): self
    {
        $this->initialized['connectionUris'] = true;
        $this->connectionUris = $connectionUris;
        return $this;
    }
}