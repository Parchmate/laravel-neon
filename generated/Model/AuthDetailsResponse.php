<?php

namespace Vendor\Library\Generated\Model;

class AuthDetailsResponse extends \ArrayObject
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
    protected $accountId;
    /**
     * 
     *
     * @var string
     */
    protected $authMethod;
    /**
     * 
     *
     * @var string
     */
    protected $authData;
    /**
     * 
     *
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthMethod(): string
    {
        return $this->authMethod;
    }
    /**
     * 
     *
     * @param string $authMethod
     *
     * @return self
     */
    public function setAuthMethod(string $authMethod): self
    {
        $this->initialized['authMethod'] = true;
        $this->authMethod = $authMethod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthData(): string
    {
        return $this->authData;
    }
    /**
     * 
     *
     * @param string $authData
     *
     * @return self
     */
    public function setAuthData(string $authData): self
    {
        $this->initialized['authData'] = true;
        $this->authData = $authData;
        return $this;
    }
}