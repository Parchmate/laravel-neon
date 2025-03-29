<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class JWKSResponse extends \ArrayObject
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
     * @var JWKS
     */
    protected $jwks;
    /**
     * 
     *
     * @return JWKS
     */
    public function getJwks(): JWKS
    {
        return $this->jwks;
    }
    /**
     * 
     *
     * @param JWKS $jwks
     *
     * @return self
     */
    public function setJwks(JWKS $jwks): self
    {
        $this->initialized['jwks'] = true;
        $this->jwks = $jwks;
        return $this;
    }
}