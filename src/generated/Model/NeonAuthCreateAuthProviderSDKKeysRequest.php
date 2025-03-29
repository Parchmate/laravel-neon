<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class NeonAuthCreateAuthProviderSDKKeysRequest extends \ArrayObject
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
    protected $projectId;
    /**
     * 
     *
     * @var string
     */
    protected $authProvider;
    /**
     * 
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthProvider(): string
    {
        return $this->authProvider;
    }
    /**
     * 
     *
     * @param string $authProvider
     *
     * @return self
     */
    public function setAuthProvider(string $authProvider): self
    {
        $this->initialized['authProvider'] = true;
        $this->authProvider = $authProvider;
        return $this;
    }
}