<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class NeonAuthCreateIntegrationResponse extends \ArrayObject
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
    protected $authProvider;
    /**
     * 
     *
     * @var string
     */
    protected $authProviderProjectId;
    /**
     * 
     *
     * @var string
     */
    protected $pubClientKey;
    /**
     * 
     *
     * @var string
     */
    protected $secretServerKey;
    /**
     * 
     *
     * @var string
     */
    protected $jwksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $schemaName;
    /**
     * 
     *
     * @var string
     */
    protected $tableName;
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
    /**
     * 
     *
     * @return string
     */
    public function getAuthProviderProjectId(): string
    {
        return $this->authProviderProjectId;
    }
    /**
     * 
     *
     * @param string $authProviderProjectId
     *
     * @return self
     */
    public function setAuthProviderProjectId(string $authProviderProjectId): self
    {
        $this->initialized['authProviderProjectId'] = true;
        $this->authProviderProjectId = $authProviderProjectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPubClientKey(): string
    {
        return $this->pubClientKey;
    }
    /**
     * 
     *
     * @param string $pubClientKey
     *
     * @return self
     */
    public function setPubClientKey(string $pubClientKey): self
    {
        $this->initialized['pubClientKey'] = true;
        $this->pubClientKey = $pubClientKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecretServerKey(): string
    {
        return $this->secretServerKey;
    }
    /**
     * 
     *
     * @param string $secretServerKey
     *
     * @return self
     */
    public function setSecretServerKey(string $secretServerKey): self
    {
        $this->initialized['secretServerKey'] = true;
        $this->secretServerKey = $secretServerKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJwksUrl(): string
    {
        return $this->jwksUrl;
    }
    /**
     * 
     *
     * @param string $jwksUrl
     *
     * @return self
     */
    public function setJwksUrl(string $jwksUrl): self
    {
        $this->initialized['jwksUrl'] = true;
        $this->jwksUrl = $jwksUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSchemaName(): string
    {
        return $this->schemaName;
    }
    /**
     * 
     *
     * @param string $schemaName
     *
     * @return self
     */
    public function setSchemaName(string $schemaName): self
    {
        $this->initialized['schemaName'] = true;
        $this->schemaName = $schemaName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }
    /**
     * 
     *
     * @param string $tableName
     *
     * @return self
     */
    public function setTableName(string $tableName): self
    {
        $this->initialized['tableName'] = true;
        $this->tableName = $tableName;
        return $this;
    }
}