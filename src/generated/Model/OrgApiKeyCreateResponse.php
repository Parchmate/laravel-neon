<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class OrgApiKeyCreateResponse extends \ArrayObject
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
     * The generated 64-bit token required to access the Neon API
     *
     * @var string
     */
    protected $key;
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
     * ID of the user who created this API key
     *
     * @var string
     */
    protected $createdBy;
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
     * The generated 64-bit token required to access the Neon API
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * The generated 64-bit token required to access the Neon API
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
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
     * ID of the user who created this API key
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * ID of the user who created this API key
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
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