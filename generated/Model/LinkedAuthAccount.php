<?php

namespace Vendor\Library\Generated\Model;

class LinkedAuthAccount extends \ArrayObject
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
     * Identity provider id from keycloak
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @var string
     */
    protected $providerDisplayName;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * Identity provider id from keycloak
     *
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }
    /**
     * Identity provider id from keycloak
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProviderDisplayName(): string
    {
        return $this->providerDisplayName;
    }
    /**
     * 
     *
     * @param string $providerDisplayName
     *
     * @return self
     */
    public function setProviderDisplayName(string $providerDisplayName): self
    {
        $this->initialized['providerDisplayName'] = true;
        $this->providerDisplayName = $providerDisplayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
}