<?php

namespace Vendor\Library\Generated\Model;

class OrgApiKeyCreateRequest extends \ArrayObject
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
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @var string
     */
    protected $keyName;
    /**
     * If set, the API key can access only this project
     *
     * @var string
     */
    protected $projectId;
    /**
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @return string
     */
    public function getKeyName(): string
    {
        return $this->keyName;
    }
    /**
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @param string $keyName
     *
     * @return self
     */
    public function setKeyName(string $keyName): self
    {
        $this->initialized['keyName'] = true;
        $this->keyName = $keyName;
        return $this;
    }
    /**
     * If set, the API key can access only this project
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * If set, the API key can access only this project
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
}