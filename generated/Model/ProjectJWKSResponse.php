<?php

namespace Vendor\Library\Generated\Model;

class ProjectJWKSResponse extends \ArrayObject
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
     * @var list<JWKS>
     */
    protected $jwks;
    /**
     * 
     *
     * @return list<JWKS>
     */
    public function getJwks(): array
    {
        return $this->jwks;
    }
    /**
     * 
     *
     * @param list<JWKS> $jwks
     *
     * @return self
     */
    public function setJwks(array $jwks): self
    {
        $this->initialized['jwks'] = true;
        $this->jwks = $jwks;
        return $this;
    }
}