<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class CurrentUserInfoAuthResponse extends \ArrayObject
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
     * @var bool
     */
    protected $passwordStored;
    /**
     * 
     *
     * @var list<CurrentUserAuthAccount>
     */
    protected $authAccounts;
    /**
     * 
     *
     * @var list<LinkedAuthAccount>
     */
    protected $linkedAccounts;
    /**
     * 
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @return bool
     */
    public function getPasswordStored(): bool
    {
        return $this->passwordStored;
    }
    /**
     * 
     *
     * @param bool $passwordStored
     *
     * @return self
     */
    public function setPasswordStored(bool $passwordStored): self
    {
        $this->initialized['passwordStored'] = true;
        $this->passwordStored = $passwordStored;
        return $this;
    }
    /**
     * 
     *
     * @return list<CurrentUserAuthAccount>
     */
    public function getAuthAccounts(): array
    {
        return $this->authAccounts;
    }
    /**
     * 
     *
     * @param list<CurrentUserAuthAccount> $authAccounts
     *
     * @return self
     */
    public function setAuthAccounts(array $authAccounts): self
    {
        $this->initialized['authAccounts'] = true;
        $this->authAccounts = $authAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return list<LinkedAuthAccount>
     */
    public function getLinkedAccounts(): array
    {
        return $this->linkedAccounts;
    }
    /**
     * 
     *
     * @param list<LinkedAuthAccount> $linkedAccounts
     *
     * @return self
     */
    public function setLinkedAccounts(array $linkedAccounts): self
    {
        $this->initialized['linkedAccounts'] = true;
        $this->linkedAccounts = $linkedAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }
    /**
     * 
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
}