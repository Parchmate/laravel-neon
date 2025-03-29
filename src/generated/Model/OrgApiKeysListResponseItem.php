<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class OrgApiKeysListResponseItem extends \ArrayObject
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
     * The API key ID
     *
     * @var int
     */
    protected $id;
    /**
     * The user-specified API key name
     *
     * @var string
     */
    protected $name;
    /**
     * A timestamp indicating when the API key was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The user data of the user that created this API key.
     *
     * @var ApiKeyCreatorData
     */
    protected $createdBy;
    /**
     * A timestamp indicating when the API was last used
     *
     * @var \DateTime|null
     */
    protected $lastUsedAt;
    /**
     * The IP address from which the API key was last used
     *
     * @var string
     */
    protected $lastUsedFromAddr;
    /**
     * If set, the API key can access only this project
     *
     * @var string
     */
    protected $projectId;
    /**
     * The API key ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The API key ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The user-specified API key name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The user-specified API key name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A timestamp indicating when the API key was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the API key was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The user data of the user that created this API key.
     *
     * @return ApiKeyCreatorData
     */
    public function getCreatedBy(): ApiKeyCreatorData
    {
        return $this->createdBy;
    }
    /**
     * The user data of the user that created this API key.
     *
     * @param ApiKeyCreatorData $createdBy
     *
     * @return self
     */
    public function setCreatedBy(ApiKeyCreatorData $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * A timestamp indicating when the API was last used
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }
    /**
     * A timestamp indicating when the API was last used
     *
     * @param \DateTime|null $lastUsedAt
     *
     * @return self
     */
    public function setLastUsedAt(?\DateTime $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * The IP address from which the API key was last used
     *
     * @return string
     */
    public function getLastUsedFromAddr(): string
    {
        return $this->lastUsedFromAddr;
    }
    /**
     * The IP address from which the API key was last used
     *
     * @param string $lastUsedFromAddr
     *
     * @return self
     */
    public function setLastUsedFromAddr(string $lastUsedFromAddr): self
    {
        $this->initialized['lastUsedFromAddr'] = true;
        $this->lastUsedFromAddr = $lastUsedFromAddr;
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