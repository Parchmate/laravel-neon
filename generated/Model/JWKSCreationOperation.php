<?php

namespace Vendor\Library\Generated\Model;

class JWKSCreationOperation extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
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
    /**
     * 
     *
     * @return list<Operation>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param list<Operation> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
}